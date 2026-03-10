<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class TopicQuestionAnswer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topic')->insert(
            [
                [
                'topic_name' => 'Tình trạng bảo tồn động vật hoang dã',
                'topic_image' => 'topic1.jpg',
                'topic_description' => 'Bảo tồn động vật hoang dã đang đối mặt với những thách thức nghiêm trọng do sự suy giảm môi trường sống và các hoạt động con người như săn bắn trái phép và buôn bán bất hợp pháp. Các nỗ lực bảo tồn bao gồm việc thành lập các khu bảo tồn, tăng cường giáo dục cộng đồng, và thiết lập các biện pháp pháp lý để bảo vệ các loài động vật hoang dã trên toàn thế giới.',
                'score_per_question' => 100,
                ],
                [
                'topic_name' => 'Ngày Động vật hoang dã Thế giới',
                'topic_image' => 'day.jpg',
                'topic_description' => 'Ngày Động vật hoang dã Thế giới, diễn ra vào ngày 3 tháng 3 hàng năm, được Liên Hợp Quốc khởi xướng để nâng cao nhận thức về tầm quan trọng của động vật và thực vật hoang dã. Ngày này nhằm kêu gọi bảo vệ đa dạng sinh học và các loài đang bị đe dọa, đồng thời tôn vinh nỗ lực bảo tồn của các tổ chức và cá nhân trên toàn cầu.',
                'score_per_question' => 500,
                ],
                [
                    'topic_name' => 'Đại Bàng Đầu Trắng: Biểu Tượng Thiên Nhiên Hùng Vĩ',
                    'topic_image' => 'eagle3.jpg',
                    'topic_description' => 'Đại bàng đầu trắng, biểu tượng quốc gia của Hoa Kỳ, nổi bật với đầu và đuôi trắng, lông nâu sẫm, và sải cánh rộng. Sinh sống gần các vùng nước lớn, chúng săn bắt cá và động vật nhỏ, thể hiện sự tự do và quyền lực.',
                    'score_per_question' => 200,
                ],
            ]
        );
        DB::table('question')->insert(
            [
                [
                    'question_content' => 'Động vật nào có số lượng cá thể giảm … được xếp vào cấp độ rất nguy cấp (CR); giảm … thì được xếp vào cấp độ nguy cấp (EN) ; giảm sút … thì được xếp ở cấp độ sẽ nguy cấp (VU).',
                    'topic_id' => 1,
                ],
                [
                    'question_content' => 'Động vật quý hiếm là những động vật có giá trị về',
                    'topic_id' => 1,
                ],
                [
                    'question_content' => 'Động vật quý hiếm nào đang ở cấp độ đe dọa tuyệt chủng rất nguy cấp',
                    'topic_id' => 1,
                ],
                [
                    'question_content' => 'Rùa núi vàng đang bị đe dọa tuyệt chủng cấp độ',
                    'topic_id' => 1,
                ],
                [
                    'question_content' => 'Khỉ vàng có giá trị',
                    'topic_id' => 1,
                ],
                [
                    'question_content' => 'Những động vật có độ đe dọa tuyệt chủng sẽ nguy cấp là',
                    'topic_id' => 1,
                ],
                [
                    'question_content' => 'Loài nào có giá trị dược liệu chữa bệnh hen suyễn và tăng sinh lực',
                    'topic_id' => 1,
                ],
                [
                    'question_content' => 'Động vật nào được dùng chế tạo nước hoa',
                    'topic_id' => 1,
                ],
                [
                    'question_content' => 'Rùa núi vàng có giá trị',
                    'topic_id' => 1,
                ],
                [
                    'question_content' => 'Để bảo vệ động vật quý hiếm cần',
                    'topic_id' => 1,
                ],
                [
                    'question_content' => ' Ngày Thế giới Vật thể Sinh học được tổ chức vào ngày nào trong năm?',
                    'topic_id' => 2,
                ],
                [
                    'question_content' => 'Ngày Thế giới Vật thể Sinh học nhằm tôn vinh và bảo vệ điều gì?',
                    'topic_id' => 2,
                ],
                [
                    'question_content' => 'Ngày Thế giới Vật thể Sinh học được tổ chức lần đầu tiên vào năm nào?',
                    'topic_id' => 2,
                ],
                [
                    'question_content' => 'Ngày Thế giới Vật thể Sinh học kỷ niệm ngày ký kết của thỏa thuận nào?',
                    'topic_id' => 2,
                ],
                [
                    'question_content' => 'Mục tiêu chính của Ngày Thế giới Vật thể Sinh học là gì?',
                    'topic_id' => 2,
                ],
                [
                    'question_content' => 'Ai là tổ chức chủ trì tổ chức Ngày Thế giới Vật thể Sinh học?',
                    'topic_id' => 2,
                ],
                [
                    'question_content' => 'Mục đích của Ngày Thế giới Vật thể Sinh học là để:',
                    'topic_id' => 2,
                ],
                [
                    'question_content' => 'Ngày Thế giới Vật thể Sinh học được tổ chức vào ngày nào để tôn vinh các loài động vật và thực vật trên Trái Đất?',
                    'topic_id' => 2,
                ],
                [
                    'question_content' => 'Công ước Vật thể Sinh học (CBD) là một thỏa thuận quan trọng nhằm:',
                    'topic_id' => 2,
                ],
                [
                    'question_content' => 'Ngày Thế giới Vật thể Sinh học được tổ chức lần đầu tiên vào năm nào?',
                    'topic_id' => 2,
                ],
                [
                    'question_content' => 'Mục tiêu chính của Ngày Thế giới Vật thể Sinh học là gì?',
                    'topic_id' => 2,
                ],
                [
                    'question_content' => 'Ngày Thế giới Vật thể Sinh học được tổ chức vào ngày nào trong năm?',
                    'topic_id' => 2,
                ],
                [
                    'question_content' => 'Mục tiêu chính của Ngày Thế giới Vật thể Sinh học là gì?',
                    'topic_id' => 2,
                ],
                [
                    'question_content' => 'Công ước Vật thể Sinh học (CBD) được ký kết vào năm nào?',
                    'topic_id' => 2,
                ],
                [
                    'question_content' => 'Ngày Thế giới Vật thể Sinh học nhấn mạnh về tầm quan trọng của việc bảo vệ và bảo tồn điều gì?',
                    'topic_id' => 2,
                ],
                [
                    'question_content' => 'Ngoài sống ở Mĩ, đại bàng đầu trắng còn sống ở các quốc gia nào khác ?',
                    'topic_id' => 3,
                ],
                [
                    'question_content' => 'Trong số bốn cái tên khoa học dưới đây đâu là của loài đại bàng đầu trắng ?',
                    'topic_id' => 3,
                ],
                [
                    'question_content' => 'Tốc độ tối đa của đại bàng đầu trắng là bao nhiêu ?',
                    'topic_id' => 3,
                ],
                [
                    'question_content' => 'Xu hướng quần thể của đại bàng đầu trắng hiện này đang trong tình trạng gì ?',
                    'topic_id' => 3,
                ],
                [
                    'question_content' => 'Đại bàng đầu trắng đã trở thành biểu tượng quốc gia của nước nào ?',
                    'topic_id' => 3,
                ],
                [
                    'question_content' => 'Đại bàng đầu trắng có hành vi giao hợp nào dưới ?',
                    'topic_id' => 3,
                ],
                [
                    'question_content' => 'Trong các vùng khí hậu dưới đây đâu không phải là nơi đại bàng đầu trắng sinh sống ?',
                    'topic_id' => 3,
                ],
                [
                    'question_content' => 'Lục địa nào không có đại bàng đầu trắng sinh sống ?',
                    'topic_id' => 3,
                ],
                [
                    'question_content' => 'Thính giác của đại bàng đầu trắng tốt như con người trong khi thị lực nhìn xa tốt hơn con người tới ... lần ? Chọn đáp án đúng',
                    'topic_id' => 3,
                ],
                [
                    'question_content' => 'Tình trạng bảo tồn của đại bảng đầu trắng hiện nay ?',
                    'topic_id' => 3,
                ],
            ]
        );

        DB::table('answer')->insert(
            [
                //topic1
                [
                    'answer_content' => '80 %, 40 %, 30 %',
                    'answer_status' => 0,
                    'question_id' => 1,
                ],
                [
                    'answer_content' => '80 %, 50 %, 20 %',
                    'answer_status' => 1,
                    'question_id' => 1,
                ],
                [
                    'answer_content' => '60 %, 40 %, 20 %',
                    'answer_status' => 0,
                    'question_id' => 1,
                ],
                [
                    'answer_content' => '60 %, 50 %, 10 %',
                    'answer_status' => 0,
                    'question_id' => 1,
                ],
                [
                    'answer_content' => 'Thực phẩm, dược liệu, mĩ nghệ',
                    'answer_status' => 0,
                    'question_id' => 2,
                ],
                [
                    'answer_content' => 'Nguyên liệu công nghệ',
                    'answer_status' => 0,
                    'question_id' => 2,
                ],
                [
                    'answer_content' => 'Khoa học, xuất khẩu',
                    'answer_status' => 0,
                    'question_id' => 2,
                ],
                [
                    'answer_content' => 'Tất cả các ý trên đúng',
                    'answer_status' => 1,
                    'question_id' => 2,
                ],
                [
                    'answer_content' => 'Ốc xà cừ',
                    'answer_status' => 1,
                    'question_id' => 3,
                ],
                [
                    'answer_content' => 'Sóc đỏ',
                    'answer_status' => 0,
                    'question_id' => 3,
                ],
                [
                    'answer_content' => 'Rùa núi vàng',
                    'answer_status' => 0,
                    'question_id' => 3,
                ],
                [
                    'answer_content' => 'Cá ngựa vàng',
                    'answer_status' => 0,
                    'question_id' => 3,
                ],
                [
                    'answer_content' => 'Rất nguy cấp',
                    'answer_status' => 0,
                    'question_id' => 4,
                ],
                [
                    'answer_content' => 'Nguy cấp',
                    'answer_status' => 1,
                    'question_id' => 4,
                ],
                [
                    'answer_content' => 'Sẽ nguy cấp',
                    'answer_status' => 0,
                    'question_id' => 4,
                ],
                [
                    'answer_content' => 'Ít nguy cấp',
                    'answer_status' => 0,
                    'question_id' => 4,
                ],
                [
                    'answer_content' => 'Là động vật trong thí nghiệm khoa học',
                    'answer_status' => 1,
                    'question_id' => 5,
                ],
                [
                    'answer_content' => 'Làm cảnh',
                    'answer_status' => 0,
                    'question_id' => 5,
                ],
                [
                    'answer_content' => 'Làm thực phẩm',
                    'answer_status' => 0,
                    'question_id' => 5,
                ],
                [
                    'answer_content' => 'Làm thuốc và nước hoa',
                    'answer_status' => 0,
                    'question_id' => 5,
                ],
                [
                    'answer_content' => 'ốc xà cừ, hươu xạ',
                    'answer_status' => 0,
                    'question_id' => 6,
                ],
                [
                    'answer_content' => 'tôm hùm, rùa núi vàng',
                    'answer_status' => 0,
                    'question_id' => 6,
                ],
                [
                    'answer_content' => 'cà cuống, cá ngựa gai',
                    'answer_status' => 1,
                    'question_id' => 6,
                ],
                [
                    'answer_content' => 'khỉ vàng, gà lôi trắng',
                    'answer_status' => 0,
                    'question_id' => 6,
                ],
                [
                    'answer_content' => 'sóc đỏ',
                    'answer_status' => 0,
                    'question_id' => 7,
                ],
                [
                    'answer_content' => 'hươu xạ',
                    'answer_status' => 0,
                    'question_id' => 7,
                ],
                [
                    'answer_content' => 'cà cuống',
                    'answer_status' => 0,
                    'question_id' => 7,
                ],
                [
                    'answer_content' => 'cá ngựa gai',
                    'answer_status' => 1,
                    'question_id' => 7,
                ],
                [
                    'answer_content' => 'tôm hùm',
                    'answer_status' => 0,
                    'question_id' => 8,
                ],
                [
                    'answer_content' => 'gà lôi',
                    'answer_status' => 0,
                    'question_id' => 8,
                ],
                [
                    'answer_content' => 'khỉ vàng',
                    'answer_status' => 0,
                    'question_id' => 8,
                ],
                [
                    'answer_content' => 'hươu xạ',
                    'answer_status' => 1,
                    'question_id' => 8,
                ],
                [
                    'answer_content' => 'Thẩm mĩ, dược liệu',
                    'answer_status' => 1,
                    'question_id' => 9,
                ],
                [
                    'answer_content' => 'Giá trị thực phẩm',
                    'answer_status' => 0,
                    'question_id' => 9,
                ],
                [
                    'answer_content' => 'Vật liệu trong thủ công nghiệp',
                    'answer_status' => 0,
                    'question_id' => 9,
                ],
                [
                    'answer_content' => 'Là động vật thí nghiệm',
                    'answer_status' => 0,
                    'question_id' => 9,
                ],
                [
                    'answer_content' => 'Bảo vệ môi trường sống của động vật quý hiếm',
                    'answer_status' => 0,
                    'question_id' => 10,
                ],
                [
                    'answer_content' => 'Cấm săn bắn, buôn bán trái phép',
                    'answer_status' => 0,
                    'question_id' => 10,
                ],
                [
                    'answer_content' => 'Đẩy mạnh chăn nuôi và xây dựng các khu dự trữ thiên nhiên',
                    'answer_status' => 0,
                    'question_id' => 10,
                ],
                [
                    'answer_content' => 'Tất cả các biện pháp trên',
                    'answer_status' => 1,
                    'question_id' => 10,
                ],
                //topic2
                [
                    'answer_content' => 'Ngày 3 tháng 3',
                    'answer_status' => 1,
                    'question_id' => 11,
                ],
                [
                    'answer_content' => 'Ngày 22 tháng 4',
                    'answer_status' => 0,
                    'question_id' => 11,
                ],
                [
                    'answer_content' => 'Ngày 5 tháng 6',
                    'answer_status' => 0,
                    'question_id' => 11,
                ],
                [
                    'answer_content' => 'Ngày 10 tháng 12',
                    'answer_status' => 0,
                    'question_id' => 11,
                ],
                [
                    'answer_content' => 'Sự đa dạng sinh học trên Trái Đất',
                    'answer_status' => 0,
                    'question_id' => 12,
                ],
                [
                    'answer_content' => 'Ngày ký kết của Công ước Vật thể Sinh học',
                    'answer_status' => 0,
                    'question_id' => 12,
                ],
                [
                    'answer_content' => 'Sự phong phú của động vật',
                    'answer_status' => 1,
                    'question_id' => 12,
                ],
                [
                    'answer_content' => 'Sự phát triển của các khu rừng quốc gia',
                    'answer_status' => 0,
                    'question_id' => 12,
                ],
                [
                    'answer_content' => '1968',
                    'answer_status' => 0,
                    'question_id' => 13,
                ],
                [
                    'answer_content' => '1972',
                    'answer_status' => 0,
                    'question_id' => 13,
                ],
                [
                    'answer_content' => '1975',
                    'answer_status' => 1,
                    'question_id' => 13,
                ],
                [
                    'answer_content' => '1980',
                    'answer_status' => 0,
                    'question_id' => 13,
                ],
                [
                    'answer_content' => 'Công ước Vật thể Sinh học',
                    'answer_status' => 1,
                    'question_id' => 14,
                ],
                [
                    'answer_content' => 'Công ước Kyoto',
                    'answer_status' => 0,
                    'question_id' => 14,
                ],
                [
                    'answer_content' => 'Công ước Paris',
                    'answer_status' => 0,
                    'question_id' => 14,
                ],
                [
                    'answer_content' => 'Công ước CITES',
                    'answer_status' => 0,
                    'question_id' => 14,
                ],
                [
                    'answer_content' => 'Tăng cường giáo dục về động vật',
                    'answer_status' => 0,
                    'question_id' => 15,
                ],
                [
                    'answer_content' => 'Tăng cường sự đa dạng sinh học',
                    'answer_status' => 1,
                    'question_id' => 15,
                ],
                [
                    'answer_content' => 'Tôn vinh các nhà khoa học về động vật',
                    'answer_status' => 0,
                    'question_id' => 15,
                ],
                [
                    'answer_content' => 'Giảm thiểu tác động của con người đối với môi trường',
                    'answer_status' => 0,
                    'question_id' => 15,
                ],
                [
                    'answer_content' => 'Tổ chức Hiệp hội Vật thể Sinh học Liên Hợp Quốc (CBD)',
                    'answer_status' => 1,
                    'question_id' => 16,
                ],
                [
                    'answer_content' => 'Tổ chức Y tế Thế giới (WHO)',
                    'answer_status' => 0,
                    'question_id' => 16,
                ],
                [
                    'answer_content' => 'Tổ chức Lao động Quốc tế (ILO)',
                    'answer_status' => 0,
                    'question_id' => 16,
                ],
                [
                    'answer_content' => 'UNESCO',
                    'answer_status' => 0,
                    'question_id' => 16,
                ],
                [
                    'answer_content' => 'Tôn vinh các loài động vật quý hiếm',
                    'answer_status' => 1,
                    'question_id' => 17,
                ],
                [
                    'answer_content' => 'Tăng cường giáo dục về bảo tồn động vật',
                    'answer_status' => 0,
                    'question_id' => 17,
                ],
                [
                    'answer_content' => 'Tăng cường nhận thức về tầm quan trọng của vật thể sinh học',
                    'answer_status' => 0,
                    'question_id' => 17,
                ],
                [
                    'answer_content' => 'Tất cả các phương án trên',
                    'answer_status' => 0,
                    'question_id' => 17,
                ],
                [
                    'answer_content' => 'Ngày 22 tháng 4',
                    'answer_status' => 0,
                    'question_id' => 18,
                ],
                [
                    'answer_content' => 'Ngày 3 tháng 3',
                    'answer_status' => 1,
                    'question_id' => 18,
                ],
                [
                    'answer_content' => 'Ngày 5 tháng 6',
                    'answer_status' => 0,
                    'question_id' => 18,
                ],
                [
                    'answer_content' => 'Ngày 20 tháng 11',
                    'answer_status' => 0,
                    'question_id' => 18,
                ],
                [
                    'answer_content' => 'Giảm thiểu biến đổi khí hậu',
                    'answer_status' => 0,
                    'question_id' => 19,
                ],
                [
                    'answer_content' => 'Bảo tồn đa dạng sinh học và sử dụng bền vững các tài nguyên sinh học',
                    'answer_status' => 1,
                    'question_id' => 19,
                ],
                [
                    'answer_content' => 'Bảo vệ quyền lợi của người lao động',
                    'answer_status' => 0,
                    'question_id' => 19,
                ],
                [
                    'answer_content' => 'Bảo vệ quyền lợi của trẻ em',
                    'answer_status' => 0,
                    'question_id' => 19,
                ],
                [
                    'answer_content' => '1970',
                    'answer_status' => 0,
                    'question_id' => 20,
                ],
                [
                    'answer_content' => '1972',
                    'answer_status' => 0,
                    'question_id' => 20,
                ],
                [
                    'answer_content' => '1975',
                    'answer_status' => 1,
                    'question_id' => 20,
                ],
                [
                    'answer_content' => '1980',
                    'answer_status' => 0,
                    'question_id' => 20,
                ],
                [
                    'answer_content' => 'Tăng cường giáo dục về động vật',
                    'answer_status' => 0,
                    'question_id' => 21,
                ],
                [
                    'answer_content' => 'Tăng cường sự đa dạng sinh học',
                    'answer_status' => 0,
                    'question_id' => 21,
                ],
                [
                    'answer_content' => 'Tôn vinh các nhà khoa học về động vật',
                    'answer_status' => 1,
                    'question_id' => 21,
                ],
                [
                    'answer_content' => 'Giảm thiểu tác động của con người đối với môi trường',
                    'answer_status' => 0,
                    'question_id' => 21,
                ],
                [
                    'answer_content' => 'Ngày 22 tháng 4',
                    'answer_status' => 0,
                    'question_id' => 22,
                ],
                [
                    'answer_content' => 'Ngày 3 tháng 3',
                    'answer_status' => 1,
                    'question_id' => 22,
                ],
                [
                    'answer_content' => 'Ngày 5 tháng 6',
                    'answer_status' => 0,
                    'question_id' => 22,
                ],
                [
                    'answer_content' => 'Ngày 20 tháng 11',
                    'answer_status' => 0,
                    'question_id' => 22,
                ],
                [
                    'answer_content' => 'Tăng cường giáo dục về động vật',
                    'answer_status' => 0,
                    'question_id' => 23,
                ],
                [
                    'answer_content' => 'Tăng cường sự đa dạng sinh học',
                    'answer_status' => 1,
                    'question_id' => 23,
                ],
                [
                    'answer_content' => 'Tôn vinh các nhà khoa học về động vật',
                    'answer_status' => 0,
                    'question_id' => 23,
                ],
                [
                    'answer_content' => 'Giảm thiểu tác động của con người đối với môi trường',
                    'answer_status' => 0,
                    'question_id' => 23,
                ],
                [
                    'answer_content' => '1968',
                    'answer_status' => 0,
                    'question_id' => 24,
                ],
                [
                    'answer_content' => '1972',
                    'answer_status' => 0,
                    'question_id' => 24,
                ],
                [
                    'answer_content' => '1992',
                    'answer_status' => 1,
                    'question_id' => 24,
                ],
                [
                    'answer_content' => '2000',
                    'answer_status' => 0,
                    'question_id' => 24,
                ],
                [
                    'answer_content' => 'Rừng',
                    'answer_status' => 0,
                    'question_id' => 25,
                ],
                [
                    'answer_content' => 'Đa dạng sinh học',
                    'answer_status' => 1,
                    'question_id' => 25,
                ],
                [
                    'answer_content' => 'Động vật hoang dã',
                    'answer_status' => 0,
                    'question_id' => 25,
                ],
                [
                    'answer_content' => 'Các dạng môi trường',
                    'answer_status' => 0,
                    'question_id' => 25,
                ],

                [
                    'answer_content' => 'Belize, Canada, Ireland, Mexico',
                    'answer_status' => 1,
                    'question_id' => 26,
                ],
                [
                    'answer_content' => 'Trung Quốc, Ấn Độ, Pháp, Anh',
                    'answer_status' => 0,
                    'question_id' => 26,
                ],
                [
                    'answer_content' => 'Brazil, Argentina, Nga, Ý',
                    'answer_status' => 0,
                    'question_id' => 26,
                ],
                [
                    'answer_content' => 'Ai Cập, Nam Phi, Ấn Độ, Iran',
                    'answer_status' => 0,
                    'question_id' => 26,
                ],

                [
                    'answer_content' => 'Haliaeetus albicilla',
                    'answer_status' => 0,
                    'question_id' => 27,
                ],
                [
                    'answer_content' => 'Haliaeetus leucocephalus',
                    'answer_status' => 1,
                    'question_id' => 27,
                ],
                [
                    'answer_content' => 'Haliaeetus pelagicus',
                    'answer_status' => 0,
                    'question_id' => 27,
                ],
                [
                    'answer_content' => 'Haliaeetus vocifer',
                    'answer_status' => 0,
                    'question_id' => 27,
                ],

                [
                    'answer_content' => '120 km/h',
                    'answer_status' => 1,
                    'question_id' => 28,
                ],
                [
                    'answer_content' => '150 km/h',
                    'answer_status' => 0,
                    'question_id' => 28,
                ],
                [
                    'answer_content' => '100 km/h',
                    'answer_status' => 0,
                    'question_id' => 28,
                ],
                [
                    'answer_content' => '200 km/h',
                    'answer_status' => 0,
                    'question_id' => 28,
                ],

                [
                    'answer_content' => 'Tất cả đáp án sai',
                    'answer_status' => 0,
                    'question_id' => 29,
                ],
                [
                    'answer_content' => 'Giảm',
                    'answer_status' => 0,
                    'question_id' => 29,
                ],
                [
                    'answer_content' => 'Ổn định',
                    'answer_status' => 0,
                    'question_id' => 29,
                ],
                [
                    'answer_content' => 'Tăng',
                    'answer_status' => 1,
                    'question_id' => 29,
                ],

                [
                    'answer_content' => 'Anh',
                    'answer_status' => 0,
                    'question_id' => 30,
                ],
                [
                    'answer_content' => 'Mĩ',
                    'answer_status' => 0,
                    'question_id' => 30,
                ],
                [
                    'answer_content' => 'Nga',
                    'answer_status' => 1,
                    'question_id' => 30,
                ],
                [
                    'answer_content' => 'Ấn Độ',
                    'answer_status' => 0,
                    'question_id' => 30,
                ],
                [
                    'answer_content' => 'Đa phối ngẫu',
                    'answer_status' => 0,
                    'question_id' => 31,
                ],
                [
                    'answer_content' => 'Phối ngẫu them nhóm',
                    'answer_status' => 0,
                    'question_id' => 31,
                ],
                [
                    'answer_content' => 'Lưỡng phối ngẫu',
                    'answer_status' => 0,
                    'question_id' => 31,
                ],
                [
                    'answer_content' => 'Đơn phối ngẫu',
                    'answer_status' => 1,
                    'question_id' => 31,
                ],

                [
                    'answer_content' => 'Vùng khô cằn',
                    'answer_status' => 1,
                    'question_id' => 32,
                ],
                [
                    'answer_content' => 'Vùng nhiệt đới',
                    'answer_status' => 0,
                    'question_id' => 32,
                ],
                [
                    'answer_content' => 'Vùng ôn đới',
                    'answer_status' => 0,
                    'question_id' => 32,
                ],
                [
                    'answer_content' => 'Vùng lạnh',
                    'answer_status' => 0,
                    'question_id' => 32,
                ],

                [
                    'answer_content' => 'Châu Âu',
                    'answer_status' => 0,
                    'question_id' => 33,
                ],
                [
                    'answer_content' => 'Châu Phi',
                    'answer_status' => 1,
                    'question_id' => 33,
                ],
                [
                    'answer_content' => 'Châu Á',
                    'answer_status' => 0,
                    'question_id' => 33,
                ],
                [
                    'answer_content' => 'Châu Mĩ',
                    'answer_status' => 0,
                    'question_id' => 33,
                ],

                [
                    'answer_content' => '1 - 2 lần',
                    'answer_status' => 0,
                    'question_id' => 34,
                ],
                [
                    'answer_content' => '10 - 20 lần',
                    'answer_status' => 0,
                    'question_id' => 34,
                ],
                [
                    'answer_content' => '5 - 6 lần',
                    'answer_status' => 0,
                    'question_id' => 34,
                ],
                [
                    'answer_content' => '3 - 4 lần',
                    'answer_status' => 1,
                    'question_id' => 34,
                ],

                [
                    'answer_content' => 'EN (Nguy Cấp)',
                    'answer_status' => 0,
                    'question_id' => 35,
                ],
                [
                    'answer_content' => 'NT (Gần Nguy Cơ)',
                    'answer_status' => 0,
                    'question_id' => 35,
                ],
                [
                    'answer_content' => 'LC (Ít Quan Tâm)',
                    'answer_status' => 1,
                    'question_id' => 35,
                ],
                [
                    'answer_content' => 'VU (Dễ Bị Tổn Thương)',
                    'answer_status' => 1,
                    'question_id' => 35,
                ],
            ]
        );
    }
}
