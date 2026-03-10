<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;
use Carbon\Carbon;
class PostLikeCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert(
            [
                [
                    'title' => 'Nai sừng tấm so với tuần lộc',
                    'image' => 'deer.jpg',
                    'content' => 'Nai sừng tấm, hay cụ thể hơn là tuần lộc (Rangifer tarandus) , thường gắn liền với lễ Giáng sinh, đặc biệt vì vai trò của chúng trong văn hóa dân gian và truyền thống của các nền văn hóa khác nhau.Ở Bắc Mỹ, "nai sừng tấm" thường dùng để chỉ một loài khác (Cervus canadensis) , loài này không gắn chặt với truyền thống Giáng sinh.Trong văn hóa dân gian Scandinavia và Bắc Âu, tuần lộc gắn liền với mùa đông và chúng là một phần của văn hóa và truyền thống bản địa trong nhiều thế kỷ. Những ảnh hưởng văn hóa này đã góp phần khiến tuần lộc, hay tuần lộc ở Bắc Mỹ gắn liền với mùa lễ hội, khiến chúng trở thành biểu tượng của lễ Giáng sinh ở nhiều nơi trên thế giới.
Chúc mừng Giáng sinh tới tất cả độc giả của chúng tôi!',
                    'status' => 1,
                    'user_id' => 2,
                    'created_at' => Carbon::create(2024, 6, 3, 11, 30, 0)
                ],
                [
                    'title' => 'Khám Phá Cuộc Sống Của Loài Voi Rừng',
                    'image' => 'elephant.jpg',
                    'content' => 'Voi rừng, còn được gọi là voi châu Phi hoặc voi Ấn Độ, là một trong những loài động vật lớn nhất trên đất liền, với trọng lượng có thể lên tới 6.000 kg và chiều cao lên đến 3,3 mét. Chúng sống thành đàn và có cấu trúc xã hội rất phức tạp, thường do một con voi cái đầu đàn dẫn dắt. Đàn voi thường bao gồm những con voi cái và voi con, trong khi những con voi đực thường sống đơn độc hoặc tạo thành các nhóm nhỏ khi trưởng thành.

Voi rừng có tuổi thọ trung bình từ 60 đến 70 năm và có khả năng nhận diện từng thành viên trong đàn của mình. Chúng có trí nhớ tuyệt vời, có thể nhớ được những địa điểm có nguồn nước trong nhiều năm. Voi rừng chủ yếu ăn cỏ, lá cây, và vỏ cây, và có thể ăn tới 150 kg thức ăn mỗi ngày. Chúng sử dụng vòi để lấy thức ăn, uống nước và thậm chí là giao tiếp với nhau.

Sự tồn tại của voi rừng đang bị đe dọa nghiêm trọng bởi nạn săn bắn trái phép và mất môi trường sống do sự phá rừng. Việc bảo tồn voi rừng không chỉ giúp duy trì sự đa dạng sinh học mà còn giữ gìn một phần quan trọng của di sản tự nhiên. Nhiều tổ chức bảo tồn và chính phủ đang nỗ lực thực hiện các chương trình bảo vệ và tái thiết môi trường sống cho loài voi, nhằm đảm bảo chúng có thể tồn tại và phát triển trong tương lai.',
                    'status' => 1,
                    'user_id' => 3,
                    'created_at' => Carbon::create(2024, 6, 18, 11, 30, 0)
                ],
                [
                    'title' => 'Những người sống sót nơi hoang dã: Sự thích nghi tuyệt vời của động vật',
                    'image' => 'chameleon.jpg',
                    'content' => 'Từ sa mạc đến vùng lãnh nguyên băng giá, từ độ sâu của đại dương đến đỉnh núi cao nhất, những loài động vật này đã phát triển những đặc điểm và hành vi độc đáo cho phép chúng vượt qua thử thách và đánh lừa đối thủ. Dưới đây là một số cách thích nghi tuyệt vời nhất của động vật được tìm thấy trong tự nhiên trong loạt bài đăng của chúng tôi dành riêng cho các kiểu thích nghi khác nhau.
                    Tắc kè hoa (Khả năng thay đổi màu sắc): Tắc kè hoa có thể thay đổi màu da để hòa hợp với môi trường xung quanh, giúp chúng ẩn náu khỏi kẻ săn mồi và phục kích con mồi.',
                    'status' => 0,
                    'user_id' => 4,
                    'created_at' => Carbon::create(2024, 6, 25, 11, 30, 0)
                ],
                [
                    'title' => 'Cuộc Sống Bí Ẩn Của Báo Hoa Mai',
                    'image' => 'leopard.jpg',
                    'content' => 'Báo hoa mai, với bộ lông đặc trưng có các đốm hoa mai, là một trong những loài mèo lớn nguy hiểm và hiếm gặp nhất trên thế giới. Chúng sống chủ yếu trong rừng rậm và có khả năng leo trèo tuyệt vời, thường nghỉ ngơi trên các cành cây cao để tránh các kẻ săn mồi khác. Báo hoa mai có khả năng săn mồi vào ban đêm và có thể nhảy xa tới 6 mét để bắt con mồi.

Chế độ ăn uống của chúng rất đa dạng, từ linh dương, nai, đến khỉ và các loài chim. Chúng là những thợ săn đơn độc, sử dụng sự im lặng và tàng hình để tiếp cận con mồi một cách bất ngờ. Báo hoa mai có thể kéo con mồi lên cây để tránh bị các loài ăn thịt khác cướp mất. Điều này cũng giúp chúng có thời gian ăn uống một cách an toàn.

Sự hiện diện của báo hoa mai là một dấu hiệu của một hệ sinh thái lành mạnh, nhưng chúng đang phải đối mặt với nguy cơ tuyệt chủng do săn bắn và mất môi trường sống. Việc bảo tồn loài báo này đòi hỏi sự hợp tác quốc tế và các biện pháp bảo vệ nghiêm ngặt. Nhiều khu bảo tồn và công viên quốc gia đã được thành lập để bảo vệ môi trường sống tự nhiên của báo hoa mai, giúp chúng có cơ hội sinh sản và phát triển bền vững.',
                    'status' => 0,
                    'user_id' => 5,
                    'created_at' => Carbon::create(2024, 7, 4, 11, 30, 0)

                ],
                [
                    'title' => 'Gấu Bắc Cực: Vị Vua Của Bắc Cực',
                    'image' => 'polar_bear.jpg',
                    'content' => 'Gấu Bắc Cực là biểu tượng của vùng Bắc Cực, với khả năng sinh tồn trong điều kiện khắc nghiệt của băng tuyết. Chúng có lớp mỡ dày và bộ lông trắng giúp giữ ấm và ngụy trang trong tuyết. Gấu Bắc Cực chủ yếu săn hải cẩu để lấy thức ăn, và chúng có thể ngửi thấy mùi của con mồi từ khoảng cách hàng kilomet.

Gấu Bắc Cực là những kẻ săn mồi đơn độc, thường đi lang thang trên băng biển để tìm kiếm hải cẩu, nguồn thức ăn chính của chúng. Chúng có khả năng bơi lội rất tốt, có thể bơi hàng chục kilomet trong nước lạnh để di chuyển giữa các tảng băng. Gấu Bắc Cực cũng có thể dự trữ năng lượng bằng cách giảm hoạt động trong những giai đoạn khó khăn khi nguồn thức ăn khan hiếm.

Tuy nhiên, biến đổi khí hậu đang gây ra sự suy giảm diện tích băng biển, làm cho việc săn mồi của gấu Bắc Cực trở nên khó khăn hơn. Nhiều cá thể gấu phải di chuyển xa hơn và lâu hơn để tìm thức ăn, dẫn đến tình trạng suy dinh dưỡng và giảm tỷ lệ sinh sản. Việc bảo tồn gấu Bắc Cực không chỉ giúp duy trì quần thể loài này mà còn bảo vệ toàn bộ hệ sinh thái Bắc Cực khỏi tác động của biến đổi khí hậu. Các tổ chức môi trường đang nỗ lực giảm thiểu sự gia tăng nhiệt độ toàn cầu và bảo vệ môi trường sống tự nhiên của gấu Bắc Cực.

',
                    'status' => 0,
                    'user_id' => 6,
                    'created_at' => Carbon::create(2024, 7, 7, 11, 30, 0)

                ],
            ]
        );
    }
}
