<?php

namespace App\Http\Controllers;

use App\Models\HistoryGame;
use App\Models\Question;
use App\Models\Reward;
use App\Models\Topic;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Like;
use Auth;
use App\Models\Notification;
use Str;
use DB;
use Carbon\Carbon;
use App\Http\MessageContent;
use Illuminate\Support\Facades\Mail;
use Hash;

class PostController extends Controller
{
    public function listPostSocial()
    {
        $posts = Post::with('user')->withCount('comments')->withCount('likes')->get();
        foreach ($posts as $post) {
            $post->liked_by_user = $post->likes->where('user_id', Auth::id())->count() > 0;
        }
        $notifications = Notification::where('user_id', Auth::id())
            ->whereNot('user_action_id', Auth::id())
            ->whereDate('created_at', Carbon::today())
            ->count();
        return view('user.social', compact('posts', 'notifications'));
    }

    public function getListComment(Request $request)
    {
        $comments = DB::table('comment')
            ->where('post_id', $request->post_id)
            ->join('post', 'post.id', '=', 'comment.post_id')
            ->join('users', 'users.id', '=', 'comment.user_id')
            ->select('comment.*', 'post.*', 'users.*')
            ->get();
        return response()->json($comments);
    }

    public function createPost(Request $request)
    {
        MessageContent::loadMessages();

        $data = $request->all();
        if (isset($data['image']) && $data['image'] != null) {
            $uniqueFileName = Str::uuid()->toString() . '.' . $data['image']->extension();
            $data['image']->move(public_path('posts'), $uniqueFileName);
        } else {
            $uniqueFileName = null;
        }
        $post = new Post();
        $post->title = $data['title'];
        $post->image = $uniqueFileName;
        $post->status = Post::PENDING;
        $post->content = $data['content'];
        $post->user_id = Auth::id();
        $post->save();

        return redirect()->route('user.list_post_social');
    }

    public function editPost(Request $request) {}

    public function deletePost(Request $request)
    {
        MessageContent::loadMessages();
        $data = $request->all();
        $post = Post::where('id', $data['id'])->first();

        if ($post) {
            if ($post->delete()) {
                return response()->json(['message' => MessageContent::getMessage('delete_success')], 200);
            } else {
                return response()->json(['message' => MessageContent::getMessage('delete_failed')], 401);
            }
        }
    }

    public function createComment(Request $request)
    {
        $data = $request->all();
        $comment = new Comment();
        $comment->comment = $data['input_comment'];
        $comment->user_id = Auth::id();
        $comment->post_id = $data['post_id'];
        $comment->save();

        $post = Post::where('id', $data['post_id'])->first();
        $notication = new Notification();
        $notication->user_id = $post->user_id;
        $notication->user_action_id = Auth::id();
        $notication->type = 2;
        $notication->post_id = $data['post_id'];
        $notication->save();

        $comments = DB::table('comment')
            ->where('post_id', $data['post_id'])
            ->join('post', 'post.id', '=', 'comment.post_id')
            ->join('users', 'users.id', '=', 'comment.user_id')
            ->select('comment.*', 'post.*', 'users.*')
            ->get();
        return response()->json($comments);
    }

    public function editComment(Request $request) {}

    public function deleteComment(Request $request)
    {
        MessageContent::loadMessages();
        $data = $request->all();
        $comment = Comment::where('user_id', $data['user_id'])
            ->where('post_id', $data['post_id'])
            ->first();

        if ($comment) {
            if ($comment->delete()) {
                return response()->json(['message' => MessageContent::getMessage('delete_success')], 200);
            } else {
                return response()->json(['message' => MessageContent::getMessage('delete_failed')], 401);
            }
        }
    }

    public function likeOrDislike(Request $request)
    {

        $posts = Post::with('user')->where('id', $request->post_id)->first();
        $posts->liked_by_user = $posts->likes->where('user_id', Auth::id())->count() > 0;
        if ($posts->liked_by_user == false) {
            $like = new Like();
            $like->user_id = Auth::id();
            $like->post_id = $request->post_id;
            $like->save();

            $post = Post::where('id', $request->post_id)->first();
            $notication = new Notification();
            $notication->user_id = $post->user_id;
            $notication->user_action_id = Auth::id();
            $notication->type = 1;
            $notication->post_id = $request->post_id;
            $notication->save();
        } else {
            Like::where('user_id', Auth::id())
                ->where('post_id', $request->post_id)
                ->delete();
        }
        return response()->json(123);
    }

    public function listNotification(Request $request)
    {
        $notifications = Notification::where('user_id', Auth::id())
            ->whereNot('user_action_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();
        $notificationArray = array();
        foreach ($notifications as $notification) {
            $now = Carbon::now();
            $createdAt = Carbon::parse($notification->created_at);
            $diff = $createdAt->diff($now);
            if ($diff->y > 0) {
                $timeDiff = $diff->y . ' năm trước';
            } else if ($diff->m > 0) {
                $timeDiff = $diff->m . ' tháng trước';
            } else if ($diff->m > 0) {
                $timeDiff = $diff->d . ' ngày trước';
            } else if ($diff->h > 0) {
                $timeDiff = $diff->h . ' giờ trước';
            } else if ($diff->i > 0) {
                $timeDiff = $diff->i . ' phút trước';
            } else {
                $timeDiff = $diff->y . ' giây trước';
            }
            if ($notification->type == 1) {
                array_push($notificationArray, array('user' => $notification->userAction->name, 'message' => ' đã thích bài viết ' . $notification->post->title, 'time' => $timeDiff));
            } else {
                array_push($notificationArray, array('user' => $notification->userAction->name, 'message' => ' đã bình luận bài viết ' . $notification->post->title, 'time' =>  $timeDiff));
            }
        }
        return response()->json($notificationArray);
    }

    function getNumberNoti(Request $request)
    {
        $notifications = Notification::where('user_id', Auth::id())
            ->whereNot('user_action_id', Auth::id())
            ->whereDate('created_at', Carbon::today())
            ->count();
        return response()->json($notifications);
    }

    public function viewListTopic()
    {
        $topics = Topic::with('questions')->withCount('questions')->get();
        return view('user.list-game', compact('topics'));
    }

    public function playGame($id)
    {
        $questions = Question::with(['answers' => function ($query) {
            $query->inRandomOrder();
        }])->where('topic_id', $id)->get();
        return view('user.game', compact('questions', 'id'));
    }

    public function checkAnswer(Request $request)
    {
        MessageContent::loadMessages();
        DB::beginTransaction();
        try {
            $data = $request->all();
            $topic = Topic::where('id', $data['topic_id'])->first();
            $score = $topic->score_per_question;
            $score = (int)$score;

            $questions = $topic->questions;
            $arr = array();
            foreach ($questions as $question) {
                $answers = $question->answers()->where('answer_status', 1)->first();
                array_push($arr, $answers->id);
            }

            $data['questions'] = array_map('intval', $data['questions']);
            $length = count($arr);
            $length1 = count($data['questions']);
            $sumArrLength = $length + $length1 % 2;

            $trueAns = 0;
            $wrongAns = 0;
            $sumScore = 0;
            for ($i = 0; $i < $sumArrLength; $i++) {
                if (array_key_exists($i, $data['questions']) && array_key_exists($i, $arr)) {
                    if ($arr[$i] == $data['questions'][$i]) {
                        $trueAns++;
                        $sumScore += $score;
                    } else {
                        $wrongAns++;
                    }
                }
            }

            $history_game = new HistoryGame();
            $history_game->topic_id = $data['topic_id'];
            $history_game->user_id = Auth::id();
            $history_game->true_number = $trueAns;
            $history_game->wrong_number = $wrongAns;
            $history_game->score = $sumScore;
            $history_game->save();

            $user = User::where('id', Auth::id())->first();
            $oldRewardScore = $user->reward_score;
            $user->reward_score = $oldRewardScore + $sumScore;
            $user->save();

            DB::commit();
            $message = MessageContent::getMessage('submit_success');
            return view('user.game-over', compact('trueAns', 'wrongAns', 'sumScore'))->with('success', $message);
        } catch (Exception $e) {
            DB::rollBack();
            $message = MessageContent::getMessage('submit_failed');
            return redirect()->route('admin.list_question')->with('failed', $message);
        }
    }

    public function viewGetReward()
    {
        $rewards = Reward::all();
        return view('user.gift', compact('rewards'));
    }

    public function getReward($id)
    {
        MessageContent::loadMessages();
        DB::beginTransaction();
        $reward = Reward::where('id', $id)->first();
        $user = User::where('id', Auth::id())->first();
        if ($user->reward_score >= $reward->reward_score) {
            try {
                $user->history_reward()->attach($id, ['created_at' => Carbon::now()]);
                $old_reward_score = $user->reward_score;
                $user->reward_score =  $old_reward_score - $reward->reward_score;
                $user->save();

                Mail::send('user.includes.mail', compact('reward', 'user'), function ($email) {
                    $email->from('adw@gmail.com', 'Diễn Đàn Động Vật Hoang Dã');
                    $email->subject('Thông báo nhận quà');
                    $email->to(Auth::user()->email);
                });
                $message = MessageContent::getMessage('get_reward_success');
                DB::commit();
                return redirect()->route('user.view_get_reward')->with('success', $message);
            } catch (Exception $e) {
                DB::rollBack();
                $message = MessageContent::getMessage('get_reward_failed');
                return redirect()->route('user.view_get_reward')->with('failed', $message);
            }
        } else {
            $message = MessageContent::getMessage('score_not_enough');
            return redirect()->route('user.view_get_reward')->with('failed', $message);
        }
    }

    public function historyGetReward()
    {

        $users = User::with('history_reward')->where('id', Auth::id())->first();
        $history_rewards = $users->history_reward;
        return view('user.history-gift', compact('history_rewards'));
    }

    public function historyGame()
    {
        $history_games = HistoryGame::where('user_id', Auth::id())->get();
        $history_games->each(function ($history_game) {
            $history_game->topic_id = $history_game->getTopicName->topic_name;
        });
        $sumTrueAnswer = 0;
        $sumWrongAnswer = 0;
        foreach ($history_games as $history_game) {
            $sumTrueAnswer += $history_game->true_number;
            $sumWrongAnswer += $history_game->wrong_number;
        }

        return view('user.history-game', compact('history_games', 'sumTrueAnswer', 'sumWrongAnswer'));
    }


    public function updateUser(Request $request)
    {
        MessageContent::loadMessages();
        $data = $request->all();
        try {
            if (isset($data['avatar'])) {
                $uniqueFileName = Str::uuid()->toString() . '.' . $data['avatar']->extension();
                $data['avatar']->move(public_path('avatars'), $uniqueFileName);
            }
            $user = User::where('id', Auth::id())->first();
            $user->name = $data['username'];
            $user->email = $data['email'];
            $user->address = $data['address'];
            if (Auth::user()->password != $data['password']) {
                $user->password = Hash::make($data['password']);
            }
            $user->gender = $data['gender'];
            $user->birthdate = $data['birthdate'];
            if (isset($uniqueFileName) && $uniqueFileName != '') {
                $user->avatar = $uniqueFileName;
            }
            $user->save();
            $message = MessageContent::getMessage('update_success');
            return redirect()->route('user.list_post_social')->with('success', $message);
        } catch (Exception $e) {
            $message = MessageContent::getMessage('update_failed');
            return redirect()->back()->with('failed', $message);
        }
    }
}
