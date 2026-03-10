<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;
class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animal_detail')->insert(
            [
                [
                    'animal_name' => 'Sư Tử',
                    'animal_scientific_name' => 'Panthera leo',
                    'animal_description' => 'Sư tử ( Panthera leo ) là một loài mèo lớn thuộc chi Panthera có nguồn gốc từ Châu Phi và Ấn Độ . Nó là biểu tượng động vật được công nhận rộng rãi nhất trong văn hóa nhân loại và nó đã được mô tả rộng rãi trong các tác phẩm điêu khắc và tranh vẽ, trên quốc kỳ cũng như trong các bộ phim và văn học đương đại. Những mô tả văn hóa về sư tử rất nổi bật ở Ai Cập cổ đại, và những mô tả này đã xuất hiện ở hầu hết các nền văn hóa cổ đại và trung cổ trong phạm vi lịch sử và hiện tại của sư tử.',
                    'appearance_description' => 'Sư tử là một loài mèo hoang lớn có bộ lông ngắn màu hung và phần dưới màu trắng. Đuôi dài kết thúc bằng một chùm lông màu đen. Những con vật này thể hiện sự dị hình giới tính với con đực, có bờm đặc biệt, có màu từ đen đến vàng. Chúng phát triển bờm khi được 3 tuổi. Trong khi đó, bờm của những người sống ở khu vực thoáng đãng lại đầy đặn hơn một cách đáng chú ý. Chiếc bờm khiến sư tử trông to lớn hơn nhiều so với thực tế, giúp con vật đe dọa đối thủ khi đối đầu với những con sư tử khác cũng như linh cẩu Đốm, vốn là đối thủ cạnh tranh chính của con vật trong phạm vi của nó. Sư tử non có bộ lông màu xám, phủ đầy các mảng màu nâu, sau đó biến mất khi được 3 tháng tuổi. Tuy nhiên, sư tử ở miền đông châu Phi có xu hướng giữ lại những đốm này trên bụng.',
                    'geography_description' => 'Hiện tại, sư tử phân bố khắp khu vực cận Sahara của Châu Phi và ở Rừng Gir ở bang Gujarat của Ấn Độ. Họ thích những đồng bằng cỏ và xavan, những con sông giáp ranh và những khu rừng rộng mở có nhiều bụi rậm. Chúng hiếm khi đi vào những khu rừng kín. Quần thể còn sót lại cũng có thể được tìm thấy trong các khu rừng ẩm nhiệt đới ở Tây Phi và các khu rừng trên núi ở Đông Phi.',
                    'habit_lifestyle_description' => 'Sư tử có thể hoạt động bất cứ lúc nào trong ngày nhưng hoạt động của chúng thường đạt đỉnh điểm sau hoàng hôn sau khoảng thời gian giao lưu và chải chuốt. Hầu hết hoạt động săn bắn thường diễn ra vào lúc hoàng hôn. Ngoài ra, sư tử châu Phi dành phần lớn thời gian để nghỉ ngơi. Chúng nghỉ ngơi để tiết kiệm năng lượng khi không có con mồi hoặc để trốn cái nóng giữa trưa. Sư tử châu Phi là loài động vật có tính xã hội cao, tập hợp thành nhóm hoặc đàn, bao gồm tối đa 3 con sư tử đực và nhiều con sư tử cái cùng con non. Niềm tự hào được bảo vệ bởi những con đực, những người tuần tra và đánh dấu lãnh thổ. Tuy nhiên, có sự cạnh tranh gay gắt giữa các con đực để giành lãnh thổ và vị trí trong đàn. Trong một trường hợp, nếu một con đực khác vượt qua con đực đầu đàn, nó thường giết chết tất cả đàn con do con đực trước đó lai tạo. Trong khi đó, con đực không có xu hướng săn mồi do tốc độ chậm và ngoại hình bắt mắt. Thay vào đó, việc săn bắn được giao cho những con cái của niềm tự hào, chúng đi săn theo nhóm, hợp tác với nhau trong các chuyến đi săn của chúng. Con cái là những thợ săn xuất sắc: chúng nhanh nhẹn và linh hoạt hơn con đực, có thể săn lùng những con vật to lớn và nhanh hơn chúng rất nhiều. Sư tử có một kho giọng hát lớn. Hầu hết chúng là các biến thể của tiếng gầm gừ, gầm gừ, kêu meo meo và gầm rú. Các âm thanh khác được tạo ra bao gồm tiếng gừ gừ, thở hổn hển, chảy máu và vo ve. Tiếng gầm được sử dụng để quảng cáo sự hiện diện của họ. Sư tử thường gầm lên vào ban đêm, âm thanh có thể nghe thấy từ khoảng cách 8 km (5 mi).',
                    'diet_nutrition_description' => 'Sư tử là loài ăn thịt nói chung. Chúng chủ yếu săn ngựa vằn, linh dương, linh dương, hươu, trâu, hươu cao cổ non, lợn lòi, linh dương đầu bò, voi non và ít thường xuyên hơn - thỏ rừng và chim. Sư tử cũng có thể ăn xác thối khi có cơ hội; họ nhặt rác những động vật chết vì nguyên nhân tự nhiên như bệnh tật hoặc những con bị giết bởi những kẻ săn mồi khác như linh cẩu.',
                    'mating_habit_description' => 'Sư tử có hệ thống giao phối đa thê, nghĩa là sư tử đực có thể giao phối với một số sư tử cái. Chúng sinh sản quanh năm với thời kỳ cao điểm nhất là vào mùa mưa. Thời gian mang thai kéo dài từ 110 đến 119 ngày, sinh trung bình 3-6 con. Con cái sinh con trong một vườn ươm ẩn, đơn độc. Khi được 4 - 6 tuần tuổi, đàn con tham gia đàn con. Thông thường, tất cả các con cái của niềm tự hào đều nuôi dưỡng và chăm sóc con non; Khi một con cái mẹ rời đàn để đi săn, một con cái đang cho con bú khác sẽ nuôi con của mình. Việc cai sữa xảy ra khi được 6-7 tháng tuổi, mặc dù đàn con thường ở gần mẹ trong hai năm đầu đời. Con đực trưởng thành về mặt sinh sản khi được 5 tuổi trong khi con cái trưởng thành sớm hơn, ở độ tuổi 2,5-3.',
                    'mating_behavior' => 'Đa thê',
                    'reproduction_season' => 'Quanh năm, cao điểm vào mùa mưa',
                    'pregnancy_duration' => '110-119 ngày',
                    'baby_carrying' => '3-6 con',
                    'independent_age' => '2 năm',
                    'population_threat' => 'Sư tử từ lâu đã bị săn lùng vì sợ hãi và làm chiến lợi phẩm. Tuy nhiên, săn bắn vẫn là một trong những yếu tố chính, đe dọa quần thể động vật này trên khắp châu Phi. Hiện tại, chúng bị mất phạm vi do các khu định cư của con người ngày càng tăng và thay đổi môi trường sống của chúng thành đất nông nghiệp. Trong khi đó, những người, sống gần các khu định cư của con người, tiếp xúc với các bệnh, lây lan bởi chó nhà.',
                    'population_number' => 'Theo Sách đỏ IUCN, tổng quy mô quần thể của sư tử là 23.000-39.000 cá thể trưởng thành. Hiện tại, loài này được phân loại là Dễ bị tổn thương (VU) trong Sách đỏ IUCN và số lượng của nó ngày nay đang giảm.',
                    'ecological_niche' => 'Sư tử là một mắt xích không thể thay thế trong hệ sinh thái phạm vi của chúng. Ăn các động vật ăn cỏ như ngựa vằn hoặc trâu, chúng kiểm soát số lượng quần thể của các loài này. Nếu không, những động vật ăn cỏ này có thể cạnh tranh với các động vật khác trong phạm vi của chúng, dẫn đến sự tuyệt chủng hoàn toàn của các loài này và do đó phá hủy đa dạng sinh học của hệ sinh thái.',
                    'fun_fact' => 'Khi nghỉ ngơi, sư tử thể hiện hành vi thân thiện và hòa đồng cao, dành thời gian bên nhau và củng cố mối quan hệ xã hội giữa các thành viên trong đàn: chúng chơi đùa cùng nhau, cọ đầu vào nhau cũng như ngủ theo nhóm.
Nếu không có lông, sư tử và hổ trông giống nhau, chúng cực kỳ khó phân biệt với nhau vì cấu trúc cơ thể của chúng gần như giống hệt nhau.
Ngoài ra, sư tử châu Phi là họ hàng của báo hoa mai và báo đốm.
Sư tử đực là loài mèo duy nhất có bờm đặc trưng, ​​mang lại cho loài vật vẻ ngoài uy nghi, mang đến cho chúng danh hiệu "Vua của các loài thú".
Sư tử là loài mèo lớn thứ hai còn sống (sau hổ).
Những chú gấu con mới sinh có các đốm màu nâu trên cơ thể, thường mất đi khi chúng lớn lên, mặc dù một số cá thể vẫn giữ lại các đốm nhạt trong suốt cuộc đời.
Trong bầy, con cái chịu trách nhiệm săn mồi, trong khi con đực phải bảo vệ lãnh thổ, tuy nhiên bất chấp sự phân bổ trách nhiệm này, con đực luôn ăn trước.
Bờm của sư tử đực sẽ sẫm màu dần theo thời gian sống của chúng, đây là dấu hiệu tốt để xác định tuổi của sư tử.
Khi đi bộ, gót chân của sư tử không chạm đất do cấu trúc của chân chúng',
                    'top_speed' => '56',
                    'animal_length' => '140-250',
                    'animal_weight' => '120-249',
                    'animal_swing' => '',
                    'population_size' => '23.000-39.000',
                    'avg_lifespan' => '12-25',
                    'animal_sound' => 'lion.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/uFIEIFLJtSQ?si=5JWfJa_7VdiFv9Rv',
                    'conservation_status_id' => '3',
                    'activity_time_id' => '2',
                    'diet_type_id' => '2',
                    'category_id' => '11',
                    'population_trending_id' => '2',
                ],
                [
                    'animal_name' => 'Báo',
                    'animal_scientific_name' => 'Acinonyx jubatus',
                    'animal_description' => 'Báo săn ( Acinonyx jubatus ) là một loài mèo lớn có nguồn gốc từ Châu Phi và miền trung Iran . Nó là động vật trên cạn nhanh nhất, ước tính có khả năng chạy với tốc độ 80 đến 128 km/h (50 đến 80 mph) với tốc độ nhanh nhất được ghi nhận đáng tin cậy là 93 và 98 km/h (58 và 61 mph). Nó có một số khả năng thích ứng với tốc độ, bao gồm thân hình nhẹ nhàng, đôi chân thon dài và cái đuôi dài. Trong quá khứ, loài báo được thuần hóa và huấn luyện để săn động vật móng guốc. Chúng đã được miêu tả rộng rãi trong nghệ thuật, văn học, quảng cáo và hoạt hình.',
                    'appearance_description' => 'Báo gêpa là loài mèo lớn được nhận dạng bằng những vết đen (còn gọi là "vết rách"), chạy từ mắt trong dọc theo mũi ra ngoài miệng. Loài mèo này là loài động vật cực kỳ nhanh nhẹn, có hai chân sau mạnh mẽ và cột sống cơ bắp rất linh hoạt. Cơ thể dài và mảnh mai, được bao phủ bởi bộ lông thô màu vàng nhạt với những mảng nhỏ màu đen. Đuôi có các đốm tròn, có đầu màu đen ở đầu. Ngoài ra, chiếc đuôi khá dài giúp báo săn giữ thăng bằng và đổi hướng. Đầu nhỏ và mắt đặt cao, giúp chúng tìm được con mồi tiềm năng trên đồng cỏ. Móng vuốt của báo gêpa không thể rút lại được; chúng đào móng vuốt của mình xuống đất, giúp tăng cường khả năng bám của chúng ở tốc độ cao.',
                    'geography_description' => 'Báo gêpa phân bố khắp miền đông và miền nam châu Phi cũng như ở Trung Đông. Chúng thường sống ở đồng cỏ và thảo nguyên nhưng cũng có thể được tìm thấy ở nhiều môi trường sống khác nhau như vùng núi và thung lũng. Để ẩn náu khỏi những kẻ săn mồi, những loài động vật này thích môi trường có thảm thực vật tươi tốt như cỏ cao hoặc bụi rậm.',
                    'habit_lifestyle_description' => 'Không giống như các loài săn mồi lớn khác ở châu Phi như sư tử hay linh cẩu, báo săn hoạt động tích cực nhất vào ban ngày; bằng cách này, họ tránh được sự cạnh tranh thức ăn với những động vật này. Báo gêpa sống thành ba nhóm xã hội chính: con cái và đàn con của chúng, "liên minh" đực và những con đực đơn độc. Con cái sống cuộc sống du mục tìm kiếm con mồi trong phạm vi sống rộng lớn, trong khi con đực ít vận động hơn và thay vào đó thiết lập các vùng lãnh thổ nhỏ hơn nhiều ở những khu vực có nhiều con mồi và khả năng tiếp cận với con cái. Phạm vi sinh sống của báo gêpa có thể bao phủ một lãnh thổ rộng lớn, đôi khi chồng chéo với phạm vi lãnh thổ của một con báo khác hoặc một con sư tử. Săn bắn là hoạt động chính của báo săn suốt cả ngày, đỉnh điểm là vào lúc bình minh và hoàng hôn. Các nhóm nghỉ ngơi trên bãi cỏ sau khi hoàng hôn. Báo gêpa thường kiểm tra vùng lân cận của chúng tại các điểm quan sát như độ cao để kiểm tra con mồi hoặc động vật ăn thịt lớn hơn; ngay cả khi đang nghỉ ngơi, họ cũng thay nhau canh gác. Khi săn báo gêpa sử dụng thị giác thay vì khứu giác; chúng canh chừng con mồi từ những nơi nghỉ ngơi hoặc những cành cây thấp. Chúng sẽ rình rập con mồi, cố gắng không bị phát hiện trong chỗ ẩn nấp và tiếp cận càng gần càng tốt, thường trong phạm vi 60 đến 70 m (200 đến 230 ft) tính từ con mồi. Chúng cũng có thể nằm ẩn nấp trong chỗ nấp và chờ đợi con mồi đến gần. Ở những khu vực có độ che phủ tối thiểu, báo gêpa sẽ tiếp cận con mồi trong vòng 200 m (660 ft) và bắt đầu cuộc rượt đuổi. Những con mèo đốm này rất kêu và có nhiều tiếng kêu và âm thanh như tiếng hót líu lo (hoặc "tiếng sủa"), tiếng churrs (hoặc tiếng churtling), tiếng gừ gừ, kêu be be, ho, gầm gừ, rít, meo meo và rên rỉ (hoặc ngáp). ). Các cách phát âm khác bao gồm tiếng ồn ríu rít, âm thanh "nyam nyam" "ihn ihn" để tập hợp đàn con và "prr prr" để hướng dẫn chúng trong một cuộc hành trình. Một tiếng kêu báo động nhỏ được sử dụng để cảnh báo đàn con đứng yên.',
                    'diet_nutrition_description' => 'Báo là động vật ăn thịt. Chúng ăn chủ yếu là linh dương trong khi các loài động vật móng guốc cỡ nhỏ và vừa như linh dương Impala là nguồn thức ăn bổ sung tốt cho chế độ ăn thông thường của chúng. Khi thiếu thức ăn phù hợp, chúng cũng có thể tiêu thụ các loài nhỏ như thỏ rừng hoặc chim.',
                    'mating_habit_description' => 'Báo gêpa có hệ thống giao phối đa thê, trong đó một con đực giao phối với nhiều con cái. Ngoài ra, báo gêpa đực chỉ kết hợp với báo cái để giao phối và không cung cấp sự chăm sóc của cha mẹ. Những con vật này sinh sản quanh năm. Thời gian mang thai kéo dài khoảng ba tháng, sau đó 2-5 con được sinh ra. Trẻ sơ sinh bị mù, hoàn toàn dễ bị tổn thương. Trong vài tháng tiếp theo, đàn con được bú sữa mẹ cho đến khi chúng bắt đầu ăn thịt. Chẳng mấy chốc, những đứa trẻ bắt đầu đi cùng mẹ trong cuộc đi săn để xem và học các kỹ năng săn bắn. Ngoài ra, chúng còn học các kỹ thuật săn mồi khi chơi với anh chị em của mình. Đàn con sống với mẹ cho đến khi chúng có thể tự đi săn mồi. Sau đó, từ 18 tháng đến 2 tuổi, chúng rời đi để tìm lãnh thổ riêng. Báo gêpa cái đạt đến tuổi trưởng thành sinh sản khi được 21-22 tháng tuổi.',
                    'mating_behavior' => 'Đa thê',
                    'reproduction_season' => 'Quanh năm',
                    'pregnancy_duration' => '90 ngày',
                    'baby_carrying' => '2-5 con',
                    'independent_age' => '1,5-2 năm',
                    'population_threat' => 'Các mối đe dọa chính đối với quần thể báo bao gồm bệnh tật, mất môi trường sống, săn bắn và đàn áp trực tiếp. Những con vật này bị nông dân bức hại do là động vật ăn thịt và săn bắn gia súc. Sự phát triển của du lịch trong các khu vực môi trường sống của chúng có thể trở thành một mối đe dọa nghiêm trọng khác: các phương tiện du lịch có thể xua đuổi những con báo ra khỏi con mồi và tách đàn con ra khỏi mẹ của chúng. Những con báo được biết là có biến thể di truyền cực kỳ thấp, khiến sự sống sót của loài này thậm chí còn khó khăn hơn.',
                    'population_number' => 'Dân số báo đốm toàn cầu hiện đang giảm và trong Sách đỏ IUCN, loài này được phân loại là Dễ bị tổn thương (VU). Dân số báo đốm ở châu Phi là khoảng 6.674 cá thể trưởng thành. Ngoài ra, khoảng 60 - 100 con báo sống trong các quần thể nhỏ bị cô lập ở Iran.',
                    'ecological_niche' => 'Do là động vật ăn thịt, báo đốm kiểm soát quần thể các loài con mồi mà chúng ăn. Nếu không, quần thể của những con vật này có thể trở nên quá lớn, đến nỗi chúng sẽ phá vỡ toàn bộ mạng lưới thức ăn, ăn tất cả các thảm thực vật trong khu vực và hủy hoại đất. Mặt khác, báo đốm săn mồi trên động vật yếu hoặc ốm, do đó không cho phép các gen yếu hơn truyền sang các thế hệ tiếp theo và duy trì sức khỏe của các loài con mồi.',
                    'fun_fact' => 'Những con mèo này không thể gầm, nhưng chúng có thể kêu gừ gừ như mèo nhà khi hít vào và thở ra.
Cheetah là một từ tiếng Ấn Độ có nghĩa là "có đốm".
Trong số các loài động vật trên cạn, báo gêpa là loài nhanh nhất, loài vật này chỉ mất 3 giây để tăng tốc từ 0 đến 100 km/h!
Đuôi của báo gêpa có chức năng giống như bánh lái của thuyền, giúp con vật điều khiển khi chạy.
Báo gêpa sử dụng biểu cảm khuôn mặt để thể hiện tâm trạng của mình.
Đây là loài mèo lớn duy nhất có khả năng xoay người trên không khi chạy nước rút',
                    'top_speed' => '112',
                    'animal_length' => '112-150',
                    'animal_weight' => '21-72',
                    'animal_swing' => '',
                    'population_size' => '6.674',
                    'avg_lifespan' => '10-20',
                    'animal_sound' => 'cheetah.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/qwcGAFSCJes?si=-NxvXhhL1ww0upok',
                    'conservation_status_id' => '3',
                    'activity_time_id' => '2',
                    'diet_type_id' => '2',
                    'category_id' => '11',
                    'population_trending_id' => '2',
                ],
                [
                    'animal_name' => 'Cá Sấu Sông Nile',
                    'animal_scientific_name' => 'Crocodylus niloticus',
                    'animal_description' => 'Cá sấu sông Nile ( tên khoa học Crocodylus niloticus ) là loài cá sấu lớn sống ở môi trường nước ngọt ở Châu Phi. Ở đó nó có mặt ở 26 quốc gia. Cá sấu sông Nile là một trong những loài cá sấu nguy hiểm nhất và là nguyên nhân gây ra cái chết cho hàng trăm người mỗi năm. Nó phổ biến và không có nguy cơ tuyệt chủng, mặc dù có một số loài bị suy giảm hoặc tuyệt chủng trong khu vực.',
                    'appearance_description' => 'Cá sấu sông Nile là một trong những loài cá sấu lớn nhất. Con cái nhỏ hơn đáng kể so với con đực. Cơ thể của chúng thon gọn, đuôi dài và cứng cáp, bàn chân sau có màng. Cá sấu sông Nile có bộ hàm dài và khỏe, rất phù hợp để bắt và giữ con mồi. Nhờ một chiếc van đặc biệt được tìm thấy ở phía sau cổ họng, những con cá sấu này có thể di chuyển dưới nước với cái miệng mở và tóm và giữ con mồi mà không cần uống nước. Cá sấu sông Nile có màu ô liu xám và bụng màu vàng. Các cá thể non được xác định bằng màu xanh lục hoặc nâu ô liu sẫm và các dải chéo màu đen trên khắp cơ thể và đuôi. Khi chúng lớn lên, các dải trên cơ thể chúng trở nên mờ nhạt hơn.',
                    'geography_description' => 'Cá sấu sông Nile được tìm thấy ở châu Phi cận Sahara. Chúng thường xảy ra nhất ở các khu vực miền trung, miền đông và miền nam châu Phi cũng như miền Tây Madagascar. Cá sấu sông Nile có thể sống ở nhiều loại môi trường sống khác nhau, bao gồm các dòng nước lợ nhỏ, sông chảy xiết, đầm lầy, đập, hồ thủy triều và cửa sông. Ở Đông Phi, chúng được tìm thấy chủ yếu ở sông, hồ, đầm lầy và đập, ưa thích những vùng nước rộng, thoáng đãng hơn những vùng nước nhỏ hơn. Chúng thường được tìm thấy ở vùng nước tiếp giáp với nhiều môi trường sống mở khác nhau như xavan hoặc thậm chí bán sa mạc nhưng cũng có thể thích nghi với các đầm lầy có nhiều cây cối, các vùng ven sông có nhiều cây cối rậm rạp, đường thủy của các khu rừng khác và chu vi của rừng. Ở Madagascar, quần thể cá sấu sông Nile còn sót lại đã thích nghi với cuộc sống trong hang động. Mặc dù không phải là loài thường xuyên đi biển nhưng cá sấu sông Nile sở hữu các tuyến muối giống như tất cả các loài cá sấu thực sự và đôi khi có thể xâm nhập vào vùng nước ven biển và thậm chí cả biển.',
                    'habit_lifestyle_description' => 'Cá sấu sông Nile là loài động vật sống đơn độc. Tuy nhiên, đôi khi người ta có thể thấy chúng kiếm ăn theo nhóm nhỏ, bao gồm nhiều cá thể. Họ thường sử dụng một kỹ thuật đặc biệt, bao vây một vùng nước để tập trung cá vào đó. Sau đó, hệ thống phân cấp thống trị quyết định các thành viên trong nhóm sẽ kiếm ăn theo thứ tự nào. Những loài bò sát này chủ yếu sống về đêm. Ban ngày, cá sấu thường tắm nắng hoặc ngâm mình trong nước nếu cần. Cá sấu đực có tính lãnh thổ cao; họ tuần tra và bảo vệ lãnh thổ của mình, thường bao gồm một phần bờ biển, kéo dài khoảng 50 mét xuống nước. Cá sấu sông Nile thường lặn trong vài phút trước khi nổi lên mặt nước; tuy nhiên, khi bị đe dọa, chúng có thể chìm dưới nước tới 30 phút. Hơn nữa, khi hoàn toàn không hoạt động, loài bò sát này có khả năng nín thở tới 2 giờ. Chúng là loài chạy cực kỳ nhanh và nhìn chung, những con cá sấu này có phản xạ rất nhanh, nhưng thật không may, chúng nhanh chóng mệt mỏi.',
                    'diet_nutrition_description' => 'Cá sấu sông Nile là loài ăn thịt và ăn xác thối. Chúng ăn nhiều loại động vật, bao gồm côn trùng, động vật lưỡng cư, cá và động vật có vú trên cạn như hươu cao cổ hoặc trâu Cape. Cá sấu mới nở thường bắt đầu bằng côn trùng, cuối cùng chuyển sang con mồi lớn hơn. Cá sấu sông Nile cũng nhặt rác hoặc ăn trộm thịt của những kẻ săn mồi khác, chẳng hạn như sư tử và báo, và các nhóm cá sấu sông Nile có thể di chuyển hàng trăm mét từ đường thủy để ăn xác. Chúng cũng sẽ dễ dàng ăn những con hà mã đã chết.',
                    'mating_habit_description' => 'Cá sấu sông Nile có hệ thống giao phối đa thê, trong đó một con đực giao phối với một số con cái. Cá sấu đực thường thu hút những con cái dễ tiếp thu bằng cách tạo ra nhiều loại tiếng động khác nhau bằng cách gầm lên, đập mõm xuống nước hoặc thổi nước ra khỏi mũi. Trong khi đó, những con đực lớn hơn thường thành công hơn trong việc tìm kiếm bạn tình. Mùa làm tổ của loài này xảy ra vào tháng 11-12. Trong thời kỳ này, cá sấu cái đào tổ, đó là một cái hố ở bờ sông hoặc lòng sông đầy cát. Sau đó, đẻ 25-80 trứng và ấp trong 80 - 90 ngày. Khi thời gian nở đến gần, con cái mở tổ, mang con xuống nước. Sau một thời gian, những con non tham gia vào một trại trẻ con do con cái chăm sóc. Những con non có thể ở trong chuồng này trong 2 năm đầu đời. Cá sấu sông Nile trưởng thành về mặt sinh sản khi được 12-16 tuổi.',
                    'mating_behavior' => 'Đa thê',
                    'reproduction_season' => 'Tháng 11 - Tháng 12',
                    'pregnancy_duration' => '80 - 90 ngày',
                    'baby_carrying' => '80 trứng',
                    'independent_age' => '2 năm',
                    'population_threat' => 'Các mối đe dọa chính đối với loài này có liên quan đến con người. Do đó, loài bò sát này thu hút thợ săn vì làn da của nó, được sử dụng trong sản xuất da chất lượng cao. Mặt khác, là loài săn mồi to lớn và nguy hiểm, cá sấu sông Nile phải đối mặt với sự hung dữ từ con người, chúng phá hủy tổ của chúng và thường xuyên giết chết cá sấu. Cố gắng loại bỏ cá đánh bắt khỏi lưới đánh cá, những con vật này đôi khi làm hỏng lưới, dẫn đến xung đột giữa cá sấu và ngư dân. Trong Công viên đất ngập nước Greater St Lucia ở Nam Phi, các loài động vật đang bị đe dọa bởi sự xâm lược của các loài thực vật kỳ lạ che bóng và thay thế vị trí làm tổ của chúng, làm mát trứng của chúng, có khả năng mang lại một quần thể toàn nữ.',
                    'population_number' => 'Được phân loại là Ít quan tâm nhất (LC) trong Sách đỏ IUCN, loài bò sát này hiện không có nguy cơ tuyệt chủng. Dân số ước tính tổng thể của cá sấu sông Nile dao động từ 250.000 đến 500.000 cá thể.',
                    'ecological_niche' => '',
                    'fun_fact' => 'Người ta đã tìm thấy cá sấu sông Nile cùng với trứng của chúng trong các ngôi mộ Ai Cập.
Quá trình trao đổi chất biến nhiệt của những con cá sấu này rất có lợi cho chúng,một cá thể lớn nặng hơn 900 kg, có thể sống trong thời gian dài mà không cần ăn.
Khi chim non gặp nguy hiểm, chim mẹ sẽ nhặt chúng lên, đưa vào túi họng của mình, nơi chúng được bảo vệ.
Thông thường, cả bố và mẹ đều giúp con non chui ra khỏi trứng, chúng lăn trứng giữa lưỡi và vòm miệng, làm vỡ vỏ trứng để con non dễ dàng thoát ra ngoài hơn',
                    'top_speed' => '35',
                    'animal_length' => '3.5-6',
                    'animal_weight' => '225.000-500.000',
                    'animal_swing' => '',
                    'population_size' => '250-500',
                    'avg_lifespan' => '50-80',
                    'animal_sound' => 'nile_crocodile.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/04Jym9woVHM?si=hF_km-vwUvBqnW_h',
                    'conservation_status_id' => '1',
                    'activity_time_id' => '3',
                    'diet_type_id' => '2',
                    'category_id' => '3',
                    'population_trending_id' => '3',
                ],
                [
                    'animal_name' => 'Đại Bàng Đầu Trắng',
                    'animal_scientific_name' => 'Haliaeetus leucocephalus',
                    'animal_description' => 'Đại bàng đầu trắng ( Haliaeetus leucocephalus ) là một loài chim săn mồi tuyệt đẹp được tìm thấy ở Bắc Mỹ. Nó được tìm thấy gần những vùng nước rộng lớn với nguồn cung cấp thức ăn dồi dào và những cây cổ thụ để làm tổ. Nó xây dựng tổ lớn nhất so với bất kỳ loài chim Bắc Mỹ nào và tổ trên cây lớn nhất từng được ghi nhận cho bất kỳ loài động vật nào. Vào cuối thế kỷ 20, đại bàng hói đang trên bờ vực tuyệt chủng ở Hoa Kỳ tiếp giáp, tuy nhiên, quần thể đã phục hồi và loài này đã bị loại khỏi danh sách các loài có nguy cơ tuyệt chủng của chính phủ Hoa Kỳ vào ngày 12 tháng 7 năm 1995.',
                    'appearance_description' => 'Đại bàng đầu trắng là loài chim dễ nhận biết. Thân và cánh của nó có màu nâu sẫm trong khi đầu và đuôi có màu trắng. Chân và bàn chân có màu vàng sáng, mắt màu vàng nhạt. Đại bàng hói có móng vuốt sắc nhọn ở chân và mỏ lớn có hình móc câu. Con đực của loài này nhỏ hơn con cái. Con non và con non có màu nâu với các mức độ đốm trắng khác nhau ở phần dưới cơ thể.',
                    'geography_description' => 'Đại bàng sinh sống trên một lãnh thổ rộng lớn, trải dài từ phía bắc Mexico đến Hoa Kỳ và Canada, do đó bao phủ phần lớn Bắc Mỹ. Những con chim này di cư một phần, tùy thuộc vào vị trí. Nếu lãnh thổ của chúng có nguồn nước thoáng, các loài chim vẫn ở đó quanh năm, nhưng nếu vùng nước đóng băng trong mùa đông khiến không thể kiếm được thức ăn, chúng sẽ di cư về phía nam hoặc đến bờ biển. Trong mùa sinh sản, đại bàng hói xuất hiện ở bất kỳ loại môi trường sống đất ngập nước nào của Mỹ như bờ biển, sông, hồ lớn hoặc đầm lầy hoặc các vùng nước rộng lớn khác có nhiều cá. Chúng đòi hỏi những cây lá kim hoặc cây gỗ cứng già và trưởng thành để đậu, đậu và làm tổ. Chúng cũng sẽ làm tổ trong các đầm lầy ngập mặn, vùng đất thông, rừng cây ngập nước theo mùa, đầm lầy gỗ cứng, đồng cỏ rộng mở và vùng đồng cỏ có cây cao rải rác. Trong khi trú đông, đại bàng Hói có xu hướng chọn môi trường sống thoáng đãng, chẳng hạn như thảo nguyên, đồng cỏ hoặc lãnh nguyên hoặc những khu rừng trống thường xuyên có xác thối xâm nhập.',
                    'habit_lifestyle_description' => 'Đại bàng hói thường sống đơn độc, tụ tập thành đàn trong mùa làm tổ. Chúng cũng tụ tập thành những ổ lớn lên tới 400 con và các nhóm cũng có thể tụ tập ở những khu vực có đủ số lượng con mồi. Đại bàng hói tương đối ít hoạt động khi có gió mạnh và vào mùa đông. Khi mùa sinh sản đến, chúng kêu lên và đuổi theo đồng loại để bảo vệ lãnh thổ. Đại bàng hói săn mồi ban ngày một mình hoặc theo đàn bay dọc theo suối, lội nước, bắt cá và ăn ngay tại chỗ. Những con chim giao tiếp với nhau bằng cách sử dụng ngắt âm yếu, tiếng huýt sáo, kleek kik ik ik ik, nhịp điệu hơi giống với tiếng kêu của mòng biển. Tiếng kêu của chim non có xu hướng gay gắt và chói tai hơn chim trưởng thành',
                    'diet_nutrition_description' => 'Đại bàng hói là loài ăn thịt (ăn cá) và ăn chủ yếu là cá. Chế độ ăn của chúng cũng bao gồm các loài chim nhỏ, thỏ, bò sát, cua và động vật lưỡng cư. Ngoài ra, chúng còn có thể ăn trứng của các loài chim khác.',
                    'mating_habit_description' => 'Đại bàng hói là loài chung thủy một vợ một chồng, giao phối một lần trong đời hoặc sống cùng nhau cho đến khi một trong hai bạn tình chết. Những màn tán tỉnh do đại bàng hói biểu diễn rất ấn tượng và ngoạn mục. Họ cũng biểu diễn các màn chiến đấu, trong đó những con chim lao vào nhau. Cặp đôi tiến hành làm tổ và sau đó 1-3 tháng sẽ đẻ trứng. Mùa đẻ trứng là cuối đông đầu xuân, con cái thường đẻ 2 quả trứng. Cả con đực và con cái đều tham gia ấp trứng trong 34-36 ngày. Sau khi gà con nở, một trong hai bố mẹ thường xuyên ở bên chúng trong khoảng 2 tuần. Sau đó, khi được 10-12 tuần tuổi, gà con bắt đầu bay nhưng bố mẹ vẫn tiếp tục cho ăn và bảo vệ chúng thêm 2-3 tháng nữa. Đại bàng trưởng thành về mặt sinh sản và bắt đầu sinh sản khi chúng được 4 đến 5 tuổi.',
                    'mating_behavior' => 'Đơn phối ngẫu',
                    'reproduction_season' => 'Cuối mùa đông-đầu mùa xuân',
                    'pregnancy_duration' => '34 -36 ngày',
                    'baby_carrying' => '2 trứng',
                    'independent_age' => '120 - 170 ngày',
                    'population_threat' => 'Mặc dù thực tế là sự phục hồi của dân số đã được tiến hành, các mối đe dọa vẫn còn hiện diện. Một trong những mối đe dọa là mất môi trường sống vì sự chiếm đóng của các khu vực ven biển và sự thoát nước của vùng đất ngập nước của con người. Mặt khác, bắn súng bất hợp pháp, gây rối của con người, ô nhiễm, va chạm với đường dây điện và phương tiện hàng không là một trong những mối đe dọa đáng chú ý đối với quần thể loài này. Và cuối cùng, các chất ô nhiễm chứa một mối đe dọa ngộ độc nghiêm trọng: DDT, ví dụ, có thể gây mỏng vỏ trứng và suy sinh sản.',
                    'population_number' => 'Theo tài nguyên All About Birds, tổng quy mô quần thể sinh sản của đại bàng hói là 250.000 cá thể. Hiện tại, loài này được phân loại là Ít quan tâm nhất (LC) trong Sách đỏ IUCN và số lượng của nó ngày nay đang tăng lên.',
                    'ecological_niche' => 'Do là loài săn mồi hàng đầu, đại bàng hói đóng vai trò quan trọng trong hệ sinh thái. Sự suy giảm dân số của chúng và sau khi phục hồi đã có tác động rất lớn đến các sinh vật trong môi trường sống của chúng. Ví dụ, nó đã gây ra sự suy giảm dân số của murres trong khu vực.',
                    'fun_fact' => 'Một con đại bàng đầu trắng có khoảng 7000 chiếc lông vũ, khi nó mất một chiếc lông ở một bên cánh, nó cũng sẽ mất một chiếc lông tương ứng ở bên cánh kia để giữ thăng bằng.
Nhờ tốc độ cao và móng vuốt sắc nhọn, đại bàng đầu trắng có thể cướp mồi từ các loài chim khác và đôi khi là từ con người.
Mặc dù có tên như vậy, nhưng đại bàng đầu trắng thực ra không hề hói!,trong tiếng Latin, tên của loài này có nghĩa là đại bàng biển đầu trắng vì đại bàng trưởng thành có lông màu trắng trên đầu.
Đại bàng đầu trắng không thể ngửi nhưng lại có vị giác rất tốt: nếu thức ăn có vị hư hỏng, đại bàng sẽ không ăn.
Đầu và đuôi của đại bàng đầu trắng chỉ chuyển sang màu trắng khi được 4-5 tuổi.
Đại bàng đầu trắng hít thở không khí qua lỗ trên mỏ gọi là “nare”.
Thính giác của chúng tốt như con người trong khi thị lực nhìn xa tốt hơn con người tới 3-4 lần.
Từ năm 1782, đại bàng đầu trắng đã trở thành loài chim quốc gia của Hoa Kỳ.
Đại bàng đầu trắng chỉ được tìm thấy ở Bắc Mỹ và là một trong 7 loài đại bàng biển.
Đại bàng đầu trắng có thể băng qua nước mà không cần bơi hoặc bay qua: chúng đậu trên mặt nước và chèo thuyền qua bằng đôi cánh',
                    'top_speed' => '120',
                    'animal_length' => '70-102',
                    'animal_weight' => '3-6.3',
                    'animal_swing' => '1.8-2.3',
                    'population_size' => '250.000',
                    'avg_lifespan' => '28-36',
                    'animal_sound' => 'bald_eagle.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/9JTfcWIPvng?si=fLPvGVQLTelF_EIW',
                    'conservation_status_id' => '1',
                    'activity_time_id' => '1',
                    'diet_type_id' => '2',
                    'category_id' => '4',
                    'population_trending_id' => '1',
                ],
                [
                    'animal_name' => 'Sói Vàng Châu Phi',
                    'animal_scientific_name' => 'Canis lupaster',
                    'animal_description' => 'Sói vàng châu Phi ( Canis lupaster ) là loài chó đóng vai trò nổi bật trong một số nền văn hóa châu Phi. Trước đây, loài này được phân loại là một biến thể châu Phi của chó rừng vàng . Năm 2015, một loạt các phân tích về DNA ty thể và bộ gen hạt nhân của loài này đã chứng minh rằng trên thực tế, loài này khác với chó rừng vàng và có quan hệ họ hàng gần hơn với sói xám và chó sói đồng cỏ .',
                    'appearance_description' => 'Sói vàng châu Phi có mõm và tai tương đối dài, và đuôi tương đối ngắn. Màu lông thay đổi theo từng cá thể, theo mùa và theo địa lý, mặc dù màu sắc điển hình là vàng đến xám bạc, với các chi hơi đỏ và đốm đen trên đuôi và vai. Họng, bụng và các dấu hiệu trên mặt thường có màu trắng, và mắt có màu hổ phách. Con cái có từ hai đến bốn cặp núm vú. Mặc dù bề ngoài giống với chó rừng vàng (đặc biệt là ở Đông Phi), sói vàng châu Phi có mõm nhọn hơn và răng sắc hơn, chắc khỏe hơn. Tai dài hơn ở sói châu Phi và hộp sọ có trán cao hơn.',
                    'geography_description' => 'Sói vàng châu Phi thường được tìm thấy ở châu Phi ở phía đông bắc và tây bắc, ở phía đông từ Senegal đến Ai Cập, khắp Libya, Algeria và Morocco ở phía bắc, và ở phía nam đến Chad, Nigeria và Tanzania. Sói vàng châu Phi thích nghi để sống ở nhiều môi trường sống khác nhau; ở Algeria, chúng xuất hiện ở Địa Trung Hải, các vùng ven biển và đồi núi (bao gồm cả đất nông nghiệp có hàng rào, đất bụi rậm, rừng thông và rừng sồi), trong khi quần thể ở Senegal sinh sống ở các vùng khí hậu nhiệt đới, bán khô hạn bao gồm cả thảo nguyên Sahel. Quần thể ở Mali đã được ghi nhận ở các khối núi Sahel khô cằn. Ở Ai Cập, loài động vật châu Phi này sinh sống ở các vùng nông nghiệp, đất hoang, rìa sa mạc, vùng đá và vách đá. Ở Hồ Nasser, chúng sống gần bờ hồ.',
                    'habit_lifestyle_description' => 'Tổ chức xã hội của loài sói vàng châu Phi rất linh hoạt và khác nhau tùy theo nguồn thức ăn có sẵn. Cặp sinh sản là đơn vị cơ bản, cùng với con cái hiện tại của nó và có lẽ các thành viên của lứa trước ở lại làm "người giúp việc". Các nhóm lớn rất hiếm, chỉ được quan sát thấy ở những khu vực có nhiều chất thải của con người. Mối quan hệ trong các gia đình sói vàng châu Phi tương đối hòa bình. Những con sói sẽ nằm cạnh nhau và chải lông cho nhau. Chúng hoạt động nhiều hơn vào ban ngày. Những loài động vật này rất có tính lãnh thổ, với cặp đôi tuần tra và đánh dấu lãnh thổ của chúng cùng nhau. Cả hai đối tác, cũng như những người giúp đỡ chúng, sẽ có hành vi hung hăng đối với những kẻ xâm nhập, đặc biệt là những kẻ cùng giới tính. Các đối tác không giúp nhau đẩy lùi những kẻ xâm nhập là những kẻ khác giới. Sói vàng châu Phi thường xuyên chải lông cho nhau, đặc biệt là trong thời gian tán tỉnh, có thể kéo dài tới 30 phút. Khi chào hỏi, chúng cắn vào mặt và cổ của nhau. Khi chiến đấu, sói vàng châu Phi đập hông đối thủ, cắn và lắc vai. Tiếng kêu của chúng tương tự như tiếng chó nhà, với bảy âm thanh đã được ghi lại, bao gồm tiếng hú, tiếng sủa, tiếng gầm gừ, tiếng rên rỉ và tiếng cục tác. Có thể nhận ra các phân loài bằng sự khác biệt trong tiếng hú của chúng. Một trong những âm thanh thường nghe thấy nhất là tiếng hú cao, the thé, có ba loại; tiếng hú liên tục một âm dài, một tiếng hú lên và xuống, và một loạt tiếng hú ngắn, ngắt quãng. Những tiếng hú này được sử dụng để xua đuổi những kẻ xâm nhập và thu hút các thành viên trong gia đình. Sói vàng châu Phi cũng hú theo từng đàn; người ta cho rằng chúng làm như vậy để củng cố mối quan hệ gia đình và thiết lập địa vị lãnh thổ.',
                    'diet_nutrition_description' => 'Sói vàng châu Phi là loài ăn thịt và ăn xác thối. Chúng ăn những con mồi nhỏ, bao gồm thỏ rừng, chuột, máy cắt cỏ, sóc đất, rắn, thằn lằn và chim làm tổ trên mặt đất, chim francolin và chim booster. Chúng cũng ăn nhiều loại côn trùng, bao gồm bọ phân, mối, ấu trùng và châu chấu. Chúng cũng sẽ săn linh dương non, lợn bướu và linh dương duiker, và ăn xác động vật, trái cây và chất thải của con người.',
                    'mating_habit_description' => 'Sói châu Phi là loài chung thủy. Nghi lễ tán tỉnh của chúng cực kỳ dài, trong thời gian đó cặp đôi gần như luôn ở bên nhau. Trước khi giao phối, chúng tuần tra và đánh dấu lãnh thổ của mình bằng mùi hương. Sau thời gian mang thai khoảng 63 ngày, con cái sinh một lứa từ 1 đến 9 con. Ở Serengeti (ở Đông Phi), chó sói con được sinh ra vào tháng 12-tháng 1. Chúng bắt đầu ăn thức ăn rắn sau một tháng. Cai sữa bắt đầu ở độ tuổi 2 tháng và kết thúc ở tháng thứ 4. Khi đó, chó sói con có thể mạo hiểm đi xa hang tới 50 m, trở nên bán độc lập, đôi khi ngủ ngoài trời. Chó mẹ cho chó con ăn thường xuyên hơn chó bố hoặc chó giúp việc. Hành vi chơi đùa của chó con ngày càng trở nên hung dữ hơn khi chúng cạnh tranh thứ hạng, điều này được thiết lập sau 6 tháng.',
                    'mating_behavior' => 'Đơn phối ngẫu',
                    'reproduction_season' => 'Tháng 12-tháng 1 ở Serengeti (Đông Phi)',
                    'pregnancy_duration' => '63 ngày',
                    'baby_carrying' => '1-9 con',
                    'independent_age' => 'sau 6 tháng',
                    'population_threat' => 'Mối đe dọa chính đối với loài sói vàng châu Phi là mất môi trường sống. Khi dân số loài người tăng lên, điều này dẫn đến việc mở rộng đường sá, khu định cư và nông nghiệp, đe dọa loài này. Mất môi trường sống, loài sói vàng châu Phi xâm chiếm các khu định cư của con người, nơi mọi người coi chúng là mối nguy hiểm đối với gia súc và gia cầm, và giết chúng như loài gây hại.',
                    'population_number' => 'Sách đỏ IUCN và các nguồn khác không cung cấp số lượng tổng thể quần thể sói vàng châu Phi. Hiện tại, loài này được phân loại là loài ít quan tâm (LC) trong Sách đỏ IUCN nhưng số lượng của chúng hiện đang giảm dần.',
                    'ecological_niche' => 'Vì sói vàng châu Phi ăn rác và xác động vật nên chúng đóng vai trò rất quan trọng trong hệ sinh thái như loài ăn xác thối. Chúng cũng kiểm soát sự gia tăng số lượng loài gặm nhấm và côn trùng, tiêu thụ chúng như con mồi.',
                    'fun_fact' => 'Sói vàng châu Phi thường mang theo nhiều thức ăn hơn mức chúng có thể tiêu thụ và cất giấu phần thức ăn dư thừa, thường được phục hồi trong vòng 24 giờ.
Sói vàng châu Phi có thể bắt châu chấu và mối bay khi chúng đang ở trên không trung hoặc bằng cách lao vào chúng khi chúng đang ở trên mặt đất.
Sói vàng châu Phi cực kỳ không khoan nhượng với những loài ăn xác thối khác, chúng thống trị kền kền khi giết chết và một con sói có thể giữ hàng chục con kền kền ở lại bằng cách đe dọa, cắn và lao vào chúng.
Sói vàng châu Phi thường kiếm ăn cùng với linh cẩu đốm, mặc dù chúng sẽ bị đuổi nếu đến quá gần, linh cẩu đốm đôi khi cũng đi theo sói trong mùa linh dương đầu bò, vì sói rất hiệu quả trong việc theo dõi và bắt những con non.
Theo truyền thuyết dân gian Ai Cập Ả Rập, sói vàng châu Phi có thể khiến gà ngất xỉu vì sợ hãi chỉ bằng cách đi qua dưới ổ gà',
                    'top_speed' => '64',
                    'animal_length' => '90–100',
                    'animal_weight' => '7-15',
                    'animal_swing' => '',
                    'population_size' => 'Không xác định',
                    'avg_lifespan' => '8',
                    'animal_sound' => 'african_golden_wolf.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/iZKS5kzL6l4?si=KaPBs_dVYjsvufRs',
                    'conservation_status_id' => '1',
                    'activity_time_id' => '2',
                    'diet_type_id' => '2',
                    'category_id' => '10',
                    'population_trending_id' => '1',
                ],
                [
                    'animal_name' => 'Cá Heo Sẫm Màu',
                    'animal_scientific_name' => 'Lagenorhynchus obscurus',
                    'animal_description' => 'Cá heo sẫm màu ( Lagenorhynchus obscurus ) là một loài cá heo được tìm thấy ở vùng nước ven biển ở Nam bán cầu. Tên gọi cụ thể của loài này là tiếng Latin có nghĩa là "tối" hoặc "mờ". Loài này có quan hệ di truyền rất gần với loài cá heo hông trắng Thái Bình Dương , nhưng sự đồng thuận khoa học hiện tại cho rằng chúng là những loài riêng biệt. Phạm vi phân bố của loài cá heo này không đồng đều, với các quần thể chính xung quanh Nam Mỹ , Tây Nam Châu Phi , New Zealand và nhiều đảo đại dương khác nhau, với một số lần nhìn thấy xung quanh miền Nam Úc và Tasmania . Cá heo sẫm màu thích các dòng nước mát và vùng nước ven bờ, nhưng cũng có thể được tìm thấy ngoài khơi. Chúng ăn nhiều loại cá và mực và có chiến thuật săn mồi linh hoạt. Cá heo sẫm màu được biết đến với những màn nhào lộn đáng kinh ngạc, có một số hành vi trên không. Tình trạng của loài cá heo này vẫn chưa được biết rõ, nhưng chúng thường bị bắt bằng lưới rê.',
                    'appearance_description' => 'Ban đầu được Charles Darwin đặt tên là cá heo Fitzroy, loài động vật này là một loài cá heo tương đối nhỏ và gọn gàng. Lưng và đuôi của cá heo Dusky có màu đen xanh sẫm, thể hiện một vệt đen, kéo dài theo đường chéo qua hai bên sườn đến đuôi. Loài động vật này là họ hàng gần của cá heo hông trắng Thái Bình Dương. Tuy nhiên, các nghiên cứu khoa học đã tìm thấy một số điểm khác biệt giữa hai loài này, cho phép phân loại chúng thành hai loài riêng biệt. Một trong những đặc điểm nhận dạng dễ nhất của cá heo Dusky là không có mỏ cũng như đầu dốc đều từ lỗ phun nước đến chóp mõm. Cả con đực và con cái đều có vây lưng, con đực cong hơn. Cả hai giới đều có kích thước gần như nhau.',
                    'geography_description' => 'Những con cá heo này xuất hiện ngoài khơi bờ biển Nam Mỹ (mặc dù chúng cũng được nhìn thấy gần Argentina và xung quanh Quần đảo Falkland), Tây Nam Châu Phi và New Zealand. Những con vật này thường sống ở vùng nước ôn đới ấm đến mát và có thể được tìm thấy ở các vùng ven biển.',
                    'habit_lifestyle_description' => 'Hành vi và thói quen của loài cá heo này phụ thuộc rất nhiều vào loài cũng như khu vực môi trường sống. Theo quy luật chung, cá heo Dusky thường ở gần bờ. Vào ban ngày, những con vật này nghỉ ngơi theo nhóm nhỏ từ 10 - 20 con. Vào lúc chạng vạng, chúng di chuyển theo nhóm này ra xa bờ để kiếm ăn, tụ tập thành từng đàn lớn lên đến 1.000 con cá heo, bao gồm cả con đực và con cái. Chúng thường săn mồi trong những nhóm lớn này, bao quanh đàn cá. Sau khi kiếm ăn, những loài động vật rất hòa đồng và thích đùa nghịch này thường được quan sát thấy đang chải chuốt và nhảy cùng nhau. Sau đó, chúng tập hợp lại thành những đàn nhỏ hơn, quay trở lại bờ biển, nơi chúng nghỉ ngơi. Những con cá heo này giao tiếp bằng tiếng kêu, tiếng huýt sáo, tiếng kêu lách cách và tiếng kêu chít chít, phát ra những tiếng kêu lớn, có thể nghe thấy từ khoảng cách lên tới 2 dặm, khi những con vật này ra khỏi nước.',
                    'diet_nutrition_description' => 'Là loài ăn thịt (ăn cá), cá heo sẫm màu tiêu thụ nhiều loại sinh vật thủy sinh, bao gồm mực, tôm, cá cơm và cá.',
                    'mating_habit_description' => 'Những con cá heo này có hệ thống giao phối đa thê (lăng nhăng). Thông thường, những con đực của loài này sẽ quyết liệt bảo vệ quyền giao phối của mình, cạnh tranh với nhau. Mùa giao phối diễn ra vào mùa xuân trong khi thời kỳ mang thai kéo dài 11 tháng, sinh ra một con duy nhất, thường là vào khoảng tháng 6 đến tháng 8. Cá cái cho con bú, cho đến khi, khi được khoảng 18 tháng tuổi, cá con học cách săn mồi cùng mẹ. Trong 3 năm đầu đời, cá heo con thường ở với mẹ, sau đó chúng rời khỏi cá cái, cá mẹ có thể giao phối lại. Khi rời đi, cá heo con sẽ tìm đàn riêng của mình với những con đực, thường gia nhập các nhóm độc thân. Chúng trưởng thành về mặt tình dục khi được khoảng 4 - 5 tuổi.',
                    'mating_behavior' => 'Đa thê',
                    'reproduction_season' => 'Mùa xuân',
                    'pregnancy_duration' => '11 tháng',
                    'baby_carrying' => '1 con',
                    'independent_age' => '3 năm',
                    'population_threat' => 'Hiện nay, cá heo Dusky đang phải chịu ảnh hưởng nặng nề từ hoạt động đánh bắt thương mại, làm xáo trộn môi trường sống tự nhiên của chúng. Mặt khác, những con cá heo này cạnh tranh thức ăn với ngư dân (đặc biệt là cá sống theo đàn). Hơn nữa, chúng thường bị bắt bằng lưới lớn. Ở một số khu vực trong môi trường sống của chúng như Peru, những con cá heo này bị săn bắt để lấy thịt. Những con vật này cũng thường xuyên bị tàu thuyền đâm phải, gây ra những thương tích nghiêm trọng.',
                    'population_number' => 'Theo Sách đỏ IUCN, tổng quy mô quần thể của cá heo Dusky vẫn chưa được biết. Tuy nhiên, ước tính có quần thể loài này ở các khu vực sau: Bờ biển Patagonia - 7.252 cá thể; giữa Punta Ninfas và Cabo Blanco (Argentina) - 6.628 cá thể. Hiện tại, cá heo Dusky được phân loại là Thiếu dữ liệu (DD) trong Sách đỏ IUCN.',
                    'ecological_niche' => '',
                    'fun_fact' => 'Cá heo sẫm thải không khí và nước từ phổi qua một lỗ phun nước đặc biệt nằm trên đỉnh đầu, khi lặn chúng có thể ở dưới nước tới 90 giây.
Khi nhìn thấy thuyền, cá heo Dusky thường bơi tới gần để bám đuôi.
Những con cá heo này kiếm ăn cả ở bề mặt và dưới đáy nước - một yếu tố khiến chúng trở thành những thợ săn cực kỳ thành công, người ta đã quan sát thấy chúng săn mồi theo nhóm lên đến 300 cá thể, săn những đàn cá lớn hơn. Thỉnh thoảng chúng cũng có thể thay đổi kỹ thuật săn mồi. Khi săn mồi, chúng giao tiếp với nhau để đảm bảo chúng bắt đủ con mồi để cung cấp cho bản thân.
Trong thời gian cho con bú, con cái và con của chúng có thể được nhìn thấy ở những vùng nước nông, nơi chúng nghỉ ngơi, chăm sóc con cũng như bảo vệ con khỏi các mối đe dọa.
Theo quan điểm chung, con của cá heo Dusky không được sinh ra với kỹ năng nhào lộn, thay vào đó, chúng có được những khả năng này bằng cách quan sát màn trình diễn của cá heo trưởng thành',
                    'top_speed' => '37',
                    'animal_length' => '170-200',
                    'animal_weight' => '70–85',
                    'animal_swing' => '',
                    'population_size' => 'Không xác định',
                    'avg_lifespan' => '18-25',
                    'animal_sound' => 'dusky_dolphin.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/zJkwRcgTa7c?si=mXCoF-wII3QeTQw5',
                    'conservation_status_id' => '8',
                    'activity_time_id' => '1',
                    'diet_type_id' => '2',
                    'category_id' => '24',
                    'population_trending_id' => '3',
                ],
                [
                    'animal_name' => 'Cá Voi Sát Thủ',
                    'animal_scientific_name' => 'Orcinus orca',
                    'animal_description' => 'Cá voi sát thủ ( Orcinus orca ) là một loài cá voi có răng thuộc họ cá heo đại dương. Đây là thành viên lớn nhất của họ này. Các kỹ thuật săn mồi tinh vi và hành vi phát ra âm thanh của cá voi sát thủ đã được mô tả là biểu hiện của văn hóa động vật. Chúng xuất hiện nhiều trong thần thoại của các nền văn hóa bản địa và danh tiếng của chúng trong các nền văn hóa khác nhau dao động từ việc là linh hồn của con người đến những kẻ giết người tàn nhẫn.',
                    'appearance_description' => 'Cá voi sát thủ có thân dài, tròn với vây lưng lớn ở giữa lưng. Cơ thể của chúng có màu đen với các mảng trắng bên dưới và gần mắt. Những hoa văn đặc biệt này giúp chúng ngụy trang khi đi tìm thức ăn. Ở cá voi sơ sinh, các phần màu trắng trên cơ thể chúng có màu cam.',
                    'geography_description' => 'Cá voi sát thủ được coi là loài cá có tính toàn cầu và xuất hiện ở mọi đại dương, từ vùng Nam Cực và Bắc Cực đến các vùng biển nhiệt đới. Chúng cũng sinh sống ở nhiều vùng biển nội địa hoặc bán khép kín, chẳng hạn như Vịnh California, Vịnh Mexico, Địa Trung Hải, Vịnh Ả Rập và Biển Đỏ. Ở Nam Cực, cá voi sát thủ di chuyển đến rìa của lớp băng trôi và được cho là mạo hiểm vào lớp băng trôi dày đặc hơn, tìm kiếm những lối đi mở giống như cá voi trắng ở Bắc Cực. Tuy nhiên, chúng chỉ là những du khách theo mùa đến vùng biển Bắc Cực và không đến gần lớp băng trôi vào mùa hè. Chúng thường thích vùng nước sâu từ 20 đến 60 mét, nhưng cũng di chuyển qua vùng nước nông dọc theo bờ biển. Các mô hình di cư của cá voi sát thủ vẫn chưa được hiểu rõ. Mỗi mùa hè, những cá thể giống nhau lại xuất hiện ngoài khơi bờ biển British Columbia và Washington. Mặc dù đã có nhiều thập kỷ nghiên cứu, nhưng vẫn chưa biết loài động vật này đi đâu trong phần còn lại của năm. Người ta đã nhìn thấy những đàn cá voi sát thủ di cư từ miền nam Alaska đến miền trung California.',
                    'habit_lifestyle_description' => 'Cá voi sát thủ là loài động vật có tính xã hội cao; chúng hoạt động vào ban ngày và ngủ vào ban đêm. Chúng di chuyển theo đàn từ 3 đến 50 cá thể, do con cái dẫn đầu. Chúng thiết lập hệ thống phân cấp xã hội. Các cá thể trong đàn thường có quan hệ họ hàng với nhau và bao gồm khoảng 20% ​​con đực trưởng thành và 20% bê con, phần còn lại là con cái và con đực non. Chúng phân tán hạn chế khỏi đàn mẹ. Cá voi sát thủ có thể chia sẻ con mồi và hiếm khi rời đàn quá vài giờ. Các thành viên trong đàn học các kỹ năng thông qua quá trình học nghề, chẳng hạn như săn mồi và nuôi con. Cá voi sát thủ đôi khi được gọi là "sói biển", vì chúng săn mồi theo nhóm như bầy sói. Chúng dành phần lớn thời gian ở độ sâu nông, nhưng thỉnh thoảng lặn xuống vài trăm mét tùy thuộc vào con mồi. Cá voi sát thủ dành cả ngày để kiếm ăn, di chuyển, nghỉ ngơi và giao lưu. Chúng thường tham gia vào các hành vi trên mặt nước như nhảy lên khỏi mặt nước (nhảy hẳn ra khỏi mặt nước) và vỗ đuôi. Những hoạt động này có thể có nhiều mục đích khác nhau, chẳng hạn như tán tỉnh, giao tiếp, xua đuổi ký sinh trùng hoặc chơi đùa. Cá voi sát thủ là loài động vật rất hay kêu và giao tiếp với nhau bằng cách huýt sáo và nhấp chuột thông qua định vị bằng tiếng vang, và thông qua hành vi vật lý như nhảy lên khỏi mặt nước, vỗ đuôi hoặc vây, và nhảy do thám, khi chúng ngẩng đầu lên khỏi mặt nước để quan sát xung quanh.',
                    'diet_nutrition_description' => 'Cá voi sát thủ là loài săn mồi đỉnh cao và đứng đầu chuỗi thức ăn. Chúng săn nhiều loại con mồi lớn bao gồm hải cẩu, cá voi và cá heo nhỏ hơn, sư tử biển, các loại cá khác nhau, cá mập, mực, bạch tuộc, chim biển, rùa biển, rái cá biển và rái cá sông.',
                    'mating_habit_description' => 'Cá voi sát thủ là loài đa thê (lăng nhăng), cả con đực và con cái đều có nhiều bạn tình trong suốt mùa sinh sản. Chúng không giao phối trong đàn của mình mà với những cá thể từ đàn khác. Giao phối diễn ra bất cứ lúc nào trong năm, thường là vào mùa hè. Sau thời gian mang thai từ 15-18 tháng, con cái sẽ sinh một con non. Cá voi con sẽ bú sữa mẹ trong vòng 2 năm, nhưng khi được 12 tháng sẽ bắt đầu ăn thức ăn rắn. Cá voi mẹ dạy con mình cách săn mồi và đưa chúng vào mạng lưới xã hội của đàn. Cá voi con ở lại với đàn của mình sau khi chúng giành được sự độc lập. Cá cái trưởng thành về mặt sinh sản khi chúng được 15 tuổi và sẽ sinh con một lần sau mỗi 5 năm cho đến khi 40 tuổi. Cá đực đạt đến độ tuổi trưởng thành về mặt sinh sản khi chúng khoảng 15 tuổi, nhưng thường không sinh sản cho đến khi 21 tuổi.',
                    'mating_behavior' => 'Đa thê',
                    'reproduction_season' => 'Quanh năm, thường là vào mùa hè',
                    'pregnancy_duration' => '15-18 tháng',
                    'baby_carrying' => '1 con',
                    'independent_age' => '2 năm',
                    'population_threat' => 'Mối đe dọa lớn nhất đối với loài cá voi này đến từ sự suy thoái và xáo trộn môi trường sống của chúng. Là loài đứng đầu chuỗi thức ăn, cá voi sát thủ dễ bị tổn thương do các chất gây ô nhiễm tích tụ trong mô của chúng, chẳng hạn như hàm lượng PCB (polychlorinated biphenyls) cao được tìm thấy trong một số quần thể, có khả năng gây ra những tác động tiêu cực đến khả năng sinh sản và sự sống còn của chúng. Sự cố tràn dầu trên diện rộng có thể ảnh hưởng đến những loài động vật này, trực tiếp hoặc gián tiếp, vì nó làm giảm số lượng con mồi của chúng. Sự xáo trộn do tàu thuyền và các tiếng ồn dưới nước khác do con người gây ra có thể ảnh hưởng đến hành vi của chúng, làm gián đoạn tiếng gọi xã hội và định vị bằng tiếng vang, và ảnh hưởng đến khả năng kiếm ăn hiệu quả của cá voi sát thủ ở những nơi mà hoạt động ngắm cá voi ngày càng phổ biến. Giao thông bằng tàu thuyền cũng làm tăng nguy cơ bị thương do va chạm.',
                    'population_number' => 'Theo Sách đỏ IUCN, quần thể cá voi sát thủ trên toàn thế giới ước tính vào khoảng 50.000 con. Loài này hiện được phân loại là Thiếu dữ liệu (DD) trong danh sách các loài bị đe dọa của IUCN.',
                    'ecological_niche' => '',
                    'fun_fact' => 'Cá voi sát thủ thường không tấn công con người, nhưng chúng có tên này vì khả năng hạ gục các loài động vật lớn, chẳng hạn như cá voi khác và sư tử biển, chúng sẽ săn bắt hầu hết mọi loài động vật dưới biển, trên không trung phía trên chúng hoặc dọc theo bờ biển.
Người La Mã đặt tên cho loài cá voi này là "cá voi sát thủ" và cái tên này đã trở nên phổ biến trong những năm qua.
Khi cá voi sát thủ mới sinh, chúng có vây lưng mềm dẻo, nhưng sẽ cứng dần khi chúng lớn lên.
Vào những năm 1960, cá voi sát thủ đã có màn ra mắt ấn tượng trong các chương trình biểu diễn trên biển.
Những bộ phim nổi tiếng nhất có sự góp mặt của cá voi sát thủ bao gồm Happy Feet, Free Willy và Namu: The Killer whale.
Loài cá voi này có bộ não lớn thứ hai trong số tất cả các loài động vật có vú sống ở biển và chỉ đứng sau cá nhà táng, loài có bộ não lớn nhất trong số các loài động vật còn sống',
                    'top_speed' => '45',
                    'animal_length' => '600-900',
                    'animal_weight' => '3000–6000',
                    'animal_swing' => '',
                    'population_size' => '50.000',
                    'avg_lifespan' => '30-100',
                    'animal_sound' => 'kill_whale.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/fs8ZveNZQ8g?si=pRIJklZ7gaoAIEPG',
                    'conservation_status_id' => '8',
                    'activity_time_id' => '3',
                    'diet_type_id' => '2',
                    'category_id' => '24',
                    'population_trending_id' => '3',
                ],
                [
                    'animal_name' => 'Voi Châu Á',
                    'animal_scientific_name' => 'Elephas maximus',
                    'animal_description' => 'Voi châu Á ( Elephas maximus ) là một trong ba loài voi hoặc họ voi còn sống duy nhất trên thế giới, hai loài còn lại là voi bụi rậm châu Phi và voi rừng châu Phi . Voi châu Á là loài động vật trên cạn lớn nhất còn sống ở châu Á .',
                    'appearance_description' => 'Nhìn chung, voi châu Á nhỏ hơn voi bụi rậm châu Phi và có điểm cơ thể cao nhất trên đầu. Vòi đặc trưng của loài động vật này là phần kéo dài của mũi và môi trên kết hợp; lỗ mũi nằm ở đầu, có một nhánh giống như ngón tay. Vòi chứa tới 60.000 cơ, bao gồm các bộ dọc và tỏa ra. Voi sử dụng vòi để thở, uống nước, ăn, chạm, phủi bụi, tạo ra âm thanh và giao tiếp, tắm rửa, véo, nắm bắt, phòng thủ và tấn công. Ngà dùng để đào nước, muối và đá, để lột vỏ và nhổ rễ cây, làm đòn bẩy để điều khiển cây và cành cây đổ, để làm việc, để trưng bày, để đánh dấu cây, làm vũ khí tấn công và phòng thủ, làm chỗ tựa vòi và để bảo vệ vòi. Voi được biết là có ngà phải hoặc trái. Màu da của voi châu Á thường là xám và có thể bị che khuất bởi đất do phủi bụi và lăn lộn. Da nhăn nheo của chúng có thể cử động và chứa nhiều trung tâm thần kinh. Nó mịn hơn voi châu Phi và có thể mất sắc tố ở thân, tai hoặc cổ. Lớp biểu bì và lớp hạ bì của cơ thể dày trung bình 18 mm (0,71 in); da ở lưng dày 30 mm (1,2 in) giúp bảo vệ khỏi vết cắn, va chạm và thời tiết khắc nghiệt. Các nếp gấp của nó làm tăng diện tích bề mặt để tản nhiệt. Chúng có thể chịu lạnh tốt hơn là chịu nhiệt quá mức.',
                    'geography_description' => 'Voi châu Á sống trên một lãnh thổ rộng lớn, bao phủ bán đảo Hindustan và Đông Dương, đảo Borneo và nói chung là hầu hết Đông Nam Á. Môi trường sống của chúng bao gồm đồng bằng, rừng nhiệt đới, rừng thường xanh và bán thường xanh, rừng rụng lá ướt và khô, rừng gai cũng như đất canh tác.',
                    'habit_lifestyle_description' => 'Những con voi này là loài động vật có vú rất giỏi giao tiếp. Theo quy luật chung, chúng sống theo bầy đàn, bao gồm hơn 20 con cái. Con cái lớn tuổi nhất dẫn đầu đàn trong các tuyến đường di chuyển, tìm kiếm thức ăn và nguồn nước. Đôi khi đàn có thể chia thành các nhóm nhỏ hơn. Ngược lại, voi đực sống đơn độc. Tuy nhiên, thỉnh thoảng, chúng gửi và nhận thông điệp từ đàn qua những khoảng cách rất xa bằng âm thanh tần số cao, mà tai người không thể nghe được. Voi châu Á hoàn toàn không có lãnh thổ. Những loài động vật này hoạt động vào ban ngày và chạng vạng. Chúng ăn và đi bộ vào lúc chạng vạng và xuống núi trong khi hoàn toàn thụ động trong cái nóng ban ngày. Nguồn nước uống đáng tin cậy là điều kiện sống bắt buộc đối với voi vì chúng uống không dưới một lần một ngày.',
                    'diet_nutrition_description' => 'Voi châu Á là loài ăn cỏ (ăn lá, ăn gỗ, ăn cỏ). Các thành phần chính trong chế độ ăn uống thông thường của chúng là cỏ, lá, rễ, vỏ cây và bụi cây.',
                    'mating_habit_description' => 'Voi châu Á là loài đa thê, nghĩa là một con voi đực có thể giao phối với nhiều con voi cái. Trước khi giao phối, con đực sẽ đánh nhau để tìm ra con đực thống trị (con sẽ giao phối với nhóm voi cái). Voi châu Á giao phối quanh năm, không phụ thuộc vào mùa nào trong năm. Trong điều kiện thuận lợi, một con voi cái có thể sinh con sau mỗi 3-4 năm. Thời kỳ mang thai kéo dài khá dài, 18-22 tháng, sau đó chỉ sinh một con. Con non bú sữa mẹ cũng như những con voi cái đang cho con bú khác nếu cần. Vài tháng sau, con non sẽ bổ sung thêm cỏ vào chế độ ăn hàng ngày của mình trong khi vẫn tiếp tục ăn sữa mẹ trong vòng 1,5 năm. Ngay cả sau khi cai sữa, voi mẹ vẫn tiếp tục chăm sóc và bảo vệ con non. Voi con đạt đến độ tuổi trưởng thành về mặt sinh sản khi khoảng 14 tuổi. Tuy nhiên, điều này không dễ dàng đối với con đực; chúng chỉ được phép giao phối khi có thể thống trị những con đực khác trong khu vực.',
                    'mating_behavior' => 'Đa thê',
                    'reproduction_season' => 'Quanh năm',
                    'pregnancy_duration' => '18-22 tháng',
                    'baby_carrying' => '1 con',
                    'independent_age' => '18 tháng',
                    'population_threat' => 'Các mối đe dọa chủ yếu liên quan đến hoạt động của con người. Từ thời xa xưa, những loài động vật này đã bị săn bắt và giết hại với số lượng lớn, như một nguồn thức ăn, và sau đó là ngà voi. Việc săn bắt ngà voi vẫn tiếp tục cho đến ngày nay, là mối đe dọa đáng chú ý đối với toàn bộ quần thể voi châu Á. Nạn phá rừng và các hoạt động nông nghiệp nằm trong số các mối đe dọa, dẫn đến việc thu hẹp môi trường sống của loài voi.',
                    'population_number' => 'Sách đỏ IUCN cho biết số lượng ước tính chính thức của loài voi châu Á hiện là 41.410-52.345 cá thể. Nếu liệt kê theo quốc gia, đứng đầu là Ấn Độ với 26.390-30.770 cá thể trên khắp cả nước. Sau đó là Myanmar (4.000-5.000) và Sri Lanka (2.500-4.000). Các quốc gia khác có số lượng voi châu Á lớn tương đương là Indonesia (2.400-3.400), Thái Lan (2.500-3.200), Malaysia (2.100-3.100), Lào (500-1.000), Campuchia (250-600), Bhutan (250-500), Trung Quốc (200-250), Bangladesh (150-250), Việt Nam (70-150) và Nepal (100-125). Khoảng 13.000 cá thể được thuần hóa, chủ yếu làm việc trong lĩnh vực giải trí. ICUN Red Lit xếp loại voi châu Á vào nhóm Nguy cấp (EN) với xu hướng quần thể đang giảm dần.',
                    'ecological_niche' => 'Voi châu Á có tác động rất lớn đến hệ sinh thái của môi trường sống của chúng. Chúng biến một số khu vực rừng thành đồng cỏ và phát tán hạt giống. Hơn nữa, đã có những trường hợp voi đào hố ở lòng sông khô cạn để lấy nước cho các loài khác. Khi voi đi qua rừng, chúng mở ra những con đường rộng, giúp ngăn chặn sự lan rộng của cháy rừng.',
                    'fun_fact' => 'Không chỉ voi ​​mẹ có trách nhiệm chăm sóc và bảo vệ voi con mà những con voi cái khác trong đàn (gọi là dì) cũng có trách nhiệm này.
Voi có thể hát! Chúng sử dụng tần số siêu âm cực thấp mà tai người không thể nghe thấy, chúng hát khi muốn giữ đàn của mình ở cùng nhau và tìm bạn tình.
Voi dành phần lớn thời gian trong ngày (16 giờ) để ăn, ngoài ra, một con voi trung bình uống tới 40-50 gallon nước mỗi ngày.
Thời gian ngủ của chúng chỉ có 2 giờ mỗi ngày.
Chúng thích chuối! Hơn nữa, trước khi ăn, chúng còn lột vỏ chuối cũng như ngô và các loại thực phẩm khác.
Nước là thành phần quan trọng trong cuộc sống của loài voi, chúng không chỉ uống nước: chúng bơi, chơi đùa trong nước và đổ nước lên người nhau.
Không giống như hầu hết các loài động vật khác, voi dùng vòi để uống nước, chúng hút nước vào vòi và phun vào miệng',
                    'top_speed' => '43',
                    'animal_length' => '550-650',
                    'animal_weight' => '2700-4000',
                    'animal_swing' => '',
                    'population_size' => '41.000-52.000',
                    'avg_lifespan' => '70',
                    'animal_sound' => 'asian_elephant.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/Mxe4Z7P74vs?si=GxCVB8JbyV5FYDaq',
                    'conservation_status_id' => '4',
                    'activity_time_id' => '1',
                    'diet_type_id' => '1',
                    'category_id' => '51',
                    'population_trending_id' => '4',
                ],
                [
                    'animal_name' => 'Gấu Bắc Cực',
                    'animal_scientific_name' => 'Ursus maritimus',
                    'animal_description' => 'Gấu Bắc Cực ( Ursus maritimus ) là loài gấu ăn thịt cực độ được tìm thấy trong Vòng Bắc Cực, bao gồm Bắc Băng Dương , các vùng biển xung quanh và các khối đất liền xung quanh. Đây là loài gấu lớn nhất còn tồn tại, cũng như là loài ăn thịt lớn nhất còn tồn tại trên cạn. Mặc dù là loài chị em với gấu Nâu , nhưng chúng đã tiến hóa để chiếm một hốc sinh thái hẹp hơn, với nhiều đặc điểm cơ thể thích nghi với nhiệt độ lạnh, để di chuyển qua tuyết, băng và vùng nước rộng, và để săn hải cẩu , tạo nên phần lớn chế độ ăn của chúng. Mặc dù hầu hết gấu Bắc Cực được sinh ra trên cạn, nhưng chúng dành phần lớn thời gian trên băng biển. Tên khoa học của chúng có nghĩa là "gấu biển" và bắt nguồn từ thực tế này. Do phụ thuộc vào băng biển, gấu Bắc Cực được phân loại là động vật có vú biển. Trong hàng ngàn năm, gấu Bắc Cực là nhân vật chủ chốt trong đời sống vật chất, tinh thần và văn hóa của người dân quanh cực, và những chú gấu này vẫn quan trọng trong nền văn hóa của họ. Trong lịch sử, gấu Bắc Cực cũng được gọi là "gấu trắng". Đôi khi nó còn được gọi là "nanook", dựa trên thuật ngữ nanuq của người Inuit .',
                    'appearance_description' => 'Gấu Bắc Cực là một trong số ít loài động vật có vú lớn có thể thích nghi tốt với cuộc sống trên băng. Bộ lông của chúng bao gồm một lớp lông tơ dày và một lớp lông bảo vệ bên ngoài, có màu từ trắng đến nâu rám nắng nhưng thực chất là trong suốt. Bộ lông màu trắng thường chuyển sang màu vàng theo tuổi tác. Bàn chân của những loài động vật khổng lồ này rất lớn để phân bổ tải khi đi trên tuyết hoặc băng mỏng và để tạo lực đẩy khi bơi; chúng có thể dài tới 30 cm (12 inch) ở một con trưởng thành. Các miếng đệm của bàn chân được bao phủ bởi các gai nhỏ, mềm (các cục da), tạo lực kéo trên băng. Các móng vuốt được khoét sâu ở mặt dưới để hỗ trợ đào sâu vào lớp băng của môi trường sống tự nhiên.',
                    'geography_description' => 'Gấu Bắc Cực được tìm thấy ở Vòng Bắc Cực và các khối đất liền kề xa về phía nam như Newfoundland. Mặc dù chúng hiếm khi xuất hiện ở phía bắc vĩ độ 88°, nhưng có bằng chứng cho thấy chúng phân bố khắp Bắc Cực và xa về phía nam như Vịnh James ở Canada. Phạm vi phân bố của chúng bao gồm lãnh thổ của năm quốc gia: Đan Mạch (Greenland), Na Uy (Svalbard), Nga, Hoa Kỳ (Alaska) và Canada. Gấu Bắc Cực thích sống trên lớp băng biển hàng năm bao phủ vùng nước trên thềm lục địa và quần đảo liên đảo Bắc Cực. Những khu vực này, được gọi là "vành đai sự sống Bắc Cực", có năng suất sinh học cao so với vùng nước sâu của Bắc Cực cao. Gấu Bắc Cực thường xuyên lui tới những khu vực mà băng biển gặp nước, chẳng hạn như các khe nứt và khe nứt (những vùng nước mở tạm thời trong băng Bắc Cực), để săn hải cẩu, đây là nguồn thức ăn chính của chúng.',
                    'habit_lifestyle_description' => 'Gấu Bắc Cực sống đơn độc. Chúng có thể cạnh tranh với nhau khi có cơ hội kiếm ăn khi một con hải cẩu bị giết. Trong những trường hợp như vậy, con gấu nhỏ hơn thường bỏ chạy. Gấu Bắc Cực có thể lặn xuống nước để bắt con mồi, mở mắt trong khi nín thở tới 2 phút. Chúng không hoạt động trong phần lớn thời gian, nằm, ngủ hoặc chờ đợi (vẫn săn mồi). Phần thời gian còn lại thường dành cho việc di chuyển, đi bộ hoặc bơi, kiếm ăn hoặc rình rập con mồi. Chúng có thể di chuyển xa để tìm kiếm thức ăn. Gấu Bắc Cực thường im lặng nhưng giao tiếp bằng nhiều âm thanh và giọng nói khác nhau. Gấu cái giao tiếp với con non bằng tiếng rên rỉ và tiếng khịt mũi, và tiếng kêu đau khổ của cả gấu con và gấu con chưa trưởng thành đều là tiếng kêu be be. Gấu con có thể ngân nga trong khi bú. Khi lo lắng, gấu sẽ thở hổn hển, khịt mũi và khịt mũi trong khi tiếng rít, tiếng gầm gừ và tiếng gầm là dấu hiệu của sự hung dữ. Giao tiếp bằng hóa chất cũng có thể quan trọng: gấu để lại mùi hương trên đường đi của chúng, cho phép các cá thể theo dõi nhau trong vùng hoang dã rộng lớn của Bắc Cực.',
                    'diet_nutrition_description' => 'Hầu hết thức ăn của gấu Bắc Cực là mỡ và lông của hải cẩu đeo nhẫn. Chúng thường để lại phần xác còn lại, trở thành nguồn thức ăn quan trọng cho các loài động vật khác. Chúng cũng ăn chim, cá, quả mọng, tuần lộc và đôi khi là cả hải mã. Xác hải mã, hải cẩu và thậm chí cả cá voi có thể cung cấp nguồn thức ăn thường xuyên cho gấu Bắc Cực. Đôi khi chúng đột nhập vào hang hải cẩu dưới lòng đất để săn những chú hải cẩu con bên trong.',
                    'mating_habit_description' => 'Gấu Bắc Cực là loài đa thê và không tạo thành cặp. Việc tán tỉnh và giao phối diễn ra trên băng biển vào tháng 4 và tháng 5, khi chúng tụ tập ở những khu vực săn hải cẩu tốt nhất. Một con đực có thể theo dấu vết của một con cái đang sinh sản trong 100 km (60 dặm) trở lên và sau khi tìm thấy con cái, chúng sẽ tham gia vào cuộc chiến dữ dội với những con đực khác để giành quyền giao phối; các cuộc chiến thường dẫn đến sẹo và răng bị gãy. Sau khi giao phối, trứng đã thụ tinh vẫn ở trạng thái lơ lửng cho đến tháng 8 hoặc tháng 9. Khi các tảng băng trôi ở mức tối thiểu vào mùa thu, chấm dứt khả năng săn mồi, mỗi con cái mang thai sẽ đào một hang sinh sản bao gồm một đường hầm hẹp dẫn đến một đến ba khoang. Trong hang, nó sẽ ngủ đông tương tự như ngủ đông. Từ tháng 11 đến tháng 2, những chú gấu con được sinh ra trong tình trạng mù, được bao phủ bởi lớp lông tơ mỏng và nặng dưới 0,9 kg (2,0 lb). Trung bình, mỗi lứa có 2 con non. Gia đình gấu mẹ ở trong hang cho đến giữa tháng 2 đến giữa tháng 4, nuôi con bằng sữa giàu chất béo. Vào thời điểm mẹ phá vỡ lối vào hang, đàn con của nó nặng khoảng 10 đến 15 kg (22 đến 33 lb). Trong khoảng 12 đến 15 ngày, gia đình dành thời gian bên ngoài hang trong khi vẫn ở gần hang; chúng gặm cỏ trong khi đàn con quen với việc đi bộ và chơi đùa. Sau đó, chúng bắt đầu đi bộ đường dài từ khu vực hang đến băng biển, nơi mẹ có thể một lần nữa bắt hải cẩu. Những con non thường ở với mẹ của chúng trong 2 đến 3 năm. Con cái bắt đầu sinh sản ở độ tuổi 4 tuổi ở hầu hết các khu vực và 5 tuổi ở khu vực Biển Beaufort. Con đực thường đạt đến độ tuổi trưởng thành sinh sản ở tuổi 6; tuy nhiên, vì sự cạnh tranh giành con cái rất khốc liệt, nhiều con không sinh sản cho đến khi 8 hoặc 10 tuổi.',
                    'mating_behavior' => 'Đa thê',
                    'reproduction_season' => 'Tháng 4-tháng 5',
                    'pregnancy_duration' => '195 đến 265 ngày',
                    'baby_carrying' => '2 con',
                    'independent_age' => '2-3 năm',
                    'population_threat' => 'Gấu Bắc Cực vẫn bị người dân bản địa Bắc Cực săn bắt để lấy lông và thịt. Chúng cũng bị đe dọa bởi hoạt động khoan tìm khí đốt và dầu, hoạt động vận chuyển gia tăng và ô nhiễm từ hóa chất công nghiệp. Nhưng mối đe dọa lớn nhất là biến đổi khí hậu và sự nóng lên toàn cầu khiến băng biển tan chảy sớm hơn trong năm và buộc gấu phải lên bờ trước khi chúng tích lũy đủ lượng mỡ dự trữ để sống sót qua giai đoạn khan hiếm thức ăn. Người ta cho rằng gấu Bắc Cực có thể tuyệt chủng ngoài tự nhiên trong vòng 30 năm tới.',
                    'population_number' => 'Theo IUCN, tính đến năm 2010, ước tính có khoảng 22.000 đến 31.000 con gấu Bắc Cực đang lang thang gần Bắc Cực, phần lớn ở miền bắc Canada. Hiện tại, loài này được phân loại là loài dễ bị tổn thương (VU) trong Sách đỏ IUCN.',
                    'ecological_niche' => 'Gấu Bắc Cực là loài ăn thịt hàng đầu ở Bắc Cực. Xác hải cẩu do gấu để lại có thể là nguồn thức ăn quan trọng cho những con gấu và cáo Bắc Cực trẻ hơn, ít kinh nghiệm hơn',
                    'fun_fact' => 'Gấu Bắc Cực là động vật có vú biển vì chúng dành nhiều tháng trong năm ở biển. tuy nhiên, chúng là loài động vật có vú biển duy nhất còn sống có chân tay và bàn chân to khỏe cho phép chúng đi bộ hàng km và chạy trên cạn.
Bộ lông của gấu Bắc Cực rỗng và phản chiếu ánh sáng, vì vậy nó không thực sự có màu trắng. Bộ lông của chúng cũng không thấm nước và nhờn, gấu có thể tự rũ mình khô sau khi bơi.
Gấu Bắc Cực có khứu giác cực kỳ phát triển, có thể phát hiện hải cẩu cách xa gần 1,6 km (1 dặm) và bị chôn vùi dưới 1 m (3 ft) tuyết, thính giác của chúng nhạy bén như thính giác của con người, và thị lực của chúng cũng tốt ở khoảng cách xa.
Gấu Bắc Cực là loài bơi lội tuyệt vời và thường bơi trong nhiều ngày, với lớp mỡ trên cơ thể giúp chúng nổi, loài gấu này bơi theo kiểu chèo thuyền chó bằng cách sử dụng bàn chân trước lớn để đẩy, gấu Bắc Cực có thể bơi với tốc độ 10 km/h (6 dặm/giờ), khi đi bộ, chúng có xu hướng đi chậm chạp và duy trì tốc độ trung bình khoảng 5,6 km/h (3,5 dặm/giờ), khi chạy nước rút, chúng có thể đạt tới tốc độ 40 km/h (25 dặm/giờ)!
Gấu Bắc Cực cái thích xây hang bằng "tuyết cũ" từ những năm trước thay vì tuyết mới rơi.
Gấu Bắc Cực cái được biết đến là những bà mẹ rất tốt và có thể nhận nuôi những con gấu con khác.
Một con gấu Bắc Cực đủ mạnh để giết chết một con vật chỉ bằng một cú đá bằng chân.
Khi cuộn tròn, gấu có thể đặt một bàn chân lên mõm để giúp giữ nhiệt',
                    'top_speed' => '40',
                    'animal_length' => '180-250',
                    'animal_weight' => '150-800',
                    'animal_swing' => '',
                    'population_size' => '22.000-31.000',
                    'avg_lifespan' => '25-30',
                    'animal_sound' => 'polar_bear.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/zNO0kxTClYo?si=-2P05vgB_LWr6pjK',
                    'conservation_status_id' => '3',
                    'activity_time_id' => '3',
                    'diet_type_id' => '2',
                    'category_id' => '15',
                    'population_trending_id' => '2',
                ],
                [
                    'animal_name' => 'Chuột Túi Đỏ',
                    'animal_scientific_name' => 'Osphranter rufus',
                    'animal_description' => 'Chuột túi đỏ ( Osphranter rufus ) là loài chuột túi lớn nhất, là loài động vật có vú trên cạn lớn nhất có nguồn gốc từ Úc và là loài thú có túi lớn nhất còn tồn tại . Đây là biểu tượng của Úc và giống như tất cả các loài động vật hoang dã khác của Úc, chuột túi đỏ được pháp luật bảo vệ.',
                    'appearance_description' => 'Chuột túi đỏ có đôi tai dài, nhọn và mõm hình vuông. Con đực có bộ lông ngắn, màu nâu đỏ, chuyển sang màu vàng nhạt ở phía dưới và trên các chi. Con cái nhỏ hơn con đực và có màu xám xanh với một chút nâu, và màu xám nhạt ở phía dưới, mặc dù con cái ở vùng khô cằn có màu giống con đực hơn. Chuột túi đỏ có hai chi trước với móng vuốt nhỏ, hai chi sau cơ bắp, được sử dụng để nhảy và một cái đuôi khỏe thường được sử dụng để tạo thành chân máy khi đứng thẳng. Chuột túi đỏ duy trì nhiệt độ bên trong ở mức cân bằng nội môi khoảng 36 °C (97 °F) bằng cách sử dụng nhiều cách thích nghi về mặt vật lý, sinh lý và hành vi. Những điều này bao gồm có một lớp lông cách nhiệt, ít hoạt động hơn và ở trong bóng râm khi nhiệt độ cao, thở hổn hển, đổ mồ hôi và liếm chân trước của nó.',
                    'geography_description' => 'Chuột túi đỏ sinh sống ở các vùng đất khô cằn của lục địa Úc, ngoại trừ cực bắc và cực tây nam của đất nước, và bờ biển phía đông. Chúng có thể được tìm thấy ở các môi trường sống bụi rậm, đồng cỏ và sa mạc. Chúng thích môi trường sống thoáng đãng với một số cây để tạo bóng râm.',
                    'habit_lifestyle_description' => 'Chuột túi đỏ tụ tập thành từng nhóm nhỏ khoảng 10 con, được gọi là "bầy đàn". Các nhóm này chủ yếu bao gồm con cái và con non, với một hoặc một vài con đực. Con cái ở trong bầy đàn mà chúng được sinh ra. Thỉnh thoảng, một số lượng lớn những con chuột túi này tụ tập ở nơi có thức ăn tuyệt vời, đôi khi lên tới 1.500 cá thể. Chúng chủ yếu hoạt động vào lúc chạng vạng và ban đêm, nghỉ ngơi vào ban ngày trong bóng râm - nhưng đôi khi chúng di chuyển xung quanh vào ban ngày. Chúng dành phần lớn thời gian hoạt động của mình để gặm cỏ. Khi gặm cỏ theo bầy, chúng luôn để ý đến nguy hiểm và chúng cảnh báo những con khác bằng cách dậm chân. Khi thấy dấu hiệu này, những con chuột túi con sẽ nhảy trở lại túi của mẹ để được an toàn. Chuột túi đỏ cũng là loài bơi lội giỏi và thường chạy trốn vào đường thủy nếu bị động vật ăn thịt đe dọa. Nếu bị đuổi xuống nước, chúng có thể sử dụng chân trước để giữ kẻ săn mồi dưới nước để làm nó chết đuối.',
                    'diet_nutrition_description' => 'Chuột túi đỏ là loài ăn cỏ (folivores) và chỉ ăn thực vật, thích các loại cỏ xanh, chẳng hạn như cây có hoa, cây thân thảo và cỏ. Chúng có thể sống trong thời gian dài mà không cần nước bằng cách ăn các loại cây mọng nước chứa đầy độ ẩm.',
                    'mating_habit_description' => 'Chuột túi đỏ là loài động vật đa thê, với những con đực cạnh tranh để giành cơ hội giao phối với nhiều con cái. Chúng sẽ cố gắng tiếp cận độc quyền với nhiều con cái, chủ động xua đuổi những con đực khác. Sự cạnh tranh như vậy đôi khi dẫn đến các trận đấu "đấm bốc", khi con đực đánh nhau bằng chân trước và đá ra bằng chân. Mùa sinh sản diễn ra quanh năm nếu điều kiện thuận lợi. Con cái thường sinh một con non duy nhất, sau thời gian mang thai khoảng 32 đến 34 ngày. Khi được sinh ra, con non trèo lên qua lớp lông của mẹ và vào túi của mẹ, nơi nó ở lại, gắn chặt vào núm vú trong 70 ngày. Lần đầu tiên nó thò đầu ra khỏi túi sau 150 ngày, ra ngoài trong thời gian ngắn sau 190 ngày. Một con cái tiết sữa trong khoảng một năm, mang con non trong túi của mình trong khoảng 235 ngày. Những con cái non có thể sinh sản sớm nhất là 18 tháng tuổi và muộn nhất là 5 năm trong thời kỳ hạn hán, nhưng thông thường chúng phải được 2,5 tuổi mới bắt đầu sinh sản.',
                    'mating_behavior' => 'Đa thê',
                    'reproduction_season' => 'Quanh năm',
                    'pregnancy_duration' => '32-34 ngày',
                    'baby_carrying' => '1 con',
                    'independent_age' => '1 năm',
                    'population_threat' => 'Chuột túi đỏ không phải đối mặt với bất kỳ mối đe dọa lớn nào, và nó vẫn tiếp tục là một loài phong phú và phân bố rộng rãi. Nông nghiệp thâm canh sẽ ảnh hưởng đến loài này, nhưng cho đến nay, chưa có nhiều môi trường sống của nó bị ảnh hưởng. Tuy nhiên, một số người cho rằng sự cạnh tranh với thỏ và gia súc du nhập, đặc biệt là trong thời kỳ hạn hán, có thể là một mối đe dọa. Loài chuột túi này ở một số khu vực đông đến mức chúng bị săn bắt thương mại để lấy da và thịt, và đôi khi cũng bị bắn như một loài gây hại.',
                    'population_number' => 'Theo Bộ Môi trường của Chính phủ Úc, tổng số loài kangaroo đỏ là 11.514.298 cá thể. Số lượng loài này hiện nay ổn định và được phân loại là loài ít quan tâm (LC) trong Sách đỏ IUCN.',
                    'ecological_niche' => 'Chuột túi đỏ có vai trò quan trọng trong việc hình thành cộng đồng thực vật trong hệ sinh thái nơi chúng sinh sống do hoạt động ăn cỏ của chúng.',
                    'fun_fact' => 'Con đực được gọi là "boomers", con cái được gọi là "flyers" và con non được gọi là "joeys".
Kangaroo đỏ được đặt tên như vậy vì màu lông của chúng, màu đỏ thực chất là dầu màu đỏ xạ hương được tiết ra từ các tuyến trên da của chúng.
Một chú chuột túi có kích thước bằng một quả thạch đậu khi mới sinh.
Chuột túi đỏ có thể nhảy cao tới sáu feet (1,8 m) và nhảy xa tới 29 feet (8,8 m).
Trên cạn, kangaroo luôn đá hai chân sau cùng nhau, nhưng khi bơi dưới nước, chúng sẽ đá từng chân một cách độc lập.
Do vị trí của mắt, phạm vi thị lực của kangaroo đỏ là khoảng 300° (324° với khoảng 25° chồng lên nhau).
Kangaroo là loài động vật lớn duy nhất nhảy như phương pháp di chuyển chính của chúng, đây là phương tiện di chuyển nhanh và tiết kiệm năng lượng, cho phép chúng đi xa ở những nơi có ít nước và thức ăn.
Đôi khi, một con chuột túi sẽ nhảy đầu vào túi của mẹ nó nếu nó sợ hãi.
Số lượng Kangaroo nhiều hơn người dân ở Úc. Chúng là biểu tượng quốc gia của đất nước này và xuất hiện trên tiền xu, tem bưu chính và máy bay',
                    'top_speed' => '56',
                    'animal_length' => '85-160',
                    'animal_weight' => '18-90',
                    'animal_swing' => '',
                    'population_size' => '11.500.000',
                    'avg_lifespan' => '16-23',
                    'animal_sound' => 'red_kangaroo.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/RwwgbVHE8Dk?si=6pWzCp8BLjRuQjlA',
                    'conservation_status_id' => '1',
                    'activity_time_id' => '1',
                    'diet_type_id' => '1',
                    'category_id' => '5',
                    'population_trending_id' => '3',
                ],
                [
                    'animal_name' => 'Thanh Xà Kỳ Lân',
                    'animal_scientific_name' => 'Gonyosoma boulengeri',
                    'animal_description' => 'Thanh xà kỳ lân (Gonyosoma boulengeri) là một loài rắn không có nọc độc được tìm thấy ở Châu Á. Nó có một phần nhô ra nổi bật, đặc biệt, có vảy ở phía trước mõm, dẫn đến việc nó được đặt tên phổ biến theo tên của một loài tê giác.',
                    'appearance_description' => 'Thanh xà kỳ lân trưởng thành là 100-160 cm (39-63 in) chiều dài tổng thể (bao gồm cả đuôi). Số lượng vảy của nó bao gồm 19 hàng vây lưng ở giữa thân. Con non của loài này có màu xám nâu với các cạnh sẫm màu trên một số vảy lưng. Khi trưởng thành, thanh xà kỳ lân chuyển sang màu xám thép ở khoảng 12-14 tháng, sau đó chuyển sang màu xanh lục lam hoặc xanh lục khi trưởng thành ở khoảng 24 tháng. Tuy nhiên, một số ít cá thể hiếm hoi vẫn giữ nguyên màu xám thép khi chưa trưởng thành và không chuyển sang giai đoạn màu trưởng thành thông thường. Các nghiên cứu do Đại học Bangor thực hiện đã chỉ ra rằng phần mũi nhô ra của những con rắn này được sử dụng để trình diễn giao phối, trong đó con đực có thể rào cản đối thủ. Tuy nhiên, các nghiên cứu khác đã tìm thấy rất ít mối tương quan giữa việc sử dụng phần mũi nhô ra và màn tán tỉnh, điều đó có nghĩa là chức năng thực sự vẫn chưa được biết.',
                    'geography_description' => 'Thanh xà kỳ lân xuất hiện ở miền bắc Việt Nam bao gồm Tam Đảo và miền nam Trung Quốc. Chúng sống ở vùng đất thấp và rừng mưa cận nhiệt đới miền núi, đặc biệt là các thung lũng có suối.',
                    'habit_lifestyle_description' => 'Thanh xà kỳ lân thường sống trên cây, nghĩa là chúng dành phần lớn thời gian trên cây. Những con rắn này có khả năng nén ngang và phồng lên một phần ba đầu tiên của cơ thể khi bị đe dọa.',
                    'diet_nutrition_description' => 'Thanh xà kỳ lân là loài ăn thịt. Chế độ ăn của chúng bao gồm chuột nhỏ và các loài gặm nhấm khác, chim, trứng chim và có thể là các con mồi có xương sống khác.',
                    'mating_habit_description' => 'Thanh xà kỳ lân sinh sản từ tháng 4 đến tháng 5. Con cái đẻ trứng và có thể đẻ từ 5 đến 10 trứng trong một lứa. Thời gian ấp trứng kéo dài khoảng 60 ngày và những con rắn con mới sinh có chiều dài tổng thể là 30-35 cm (12-14 in).',
                    'mating_behavior' => 'Cạnh tranh',
                    'reproduction_season' => 'Tháng 4-tháng 5',
                    'pregnancy_duration' => '60 ngày',
                    'baby_carrying' => '5 - 10 trứng',
                    'independent_age' => 'vài giờ',
                    'population_threat' => 'Loài này hiện nay không được coi là bị đe dọa.',
                    'population_number' => 'Sách đỏ IUCN và các nguồn khác không cung cấp số lượng tổng thể của thanh xà kỳ lân. Hiện tại, loài này được phân loại là loài ít quan tâm (LC) trong Sách đỏ IUCN.',
                    'ecological_niche' => '',
                    'fun_fact' => '',
                    'top_speed' => '',
                    'animal_length' => '100-160',
                    'animal_weight' => '0.5-1',
                    'animal_swing' => '',
                    'population_size' => 'KHÔNG XÁC ĐỊNH',
                    'avg_lifespan' => '15-20',
                    'animal_sound' => '',
                    'animal_video' => 'https://www.youtube.com/embed/DmDjQ6Frw4c?si=Yanhp6nU2cVmIOEK',
                    'conservation_status_id' => '1',
                    'activity_time_id' => '2',
                    'diet_type_id' => '2',
                    'category_id' => '19',
                    'population_trending_id' => '4',
                ],
                [
                    'animal_name' => 'Gấu Túi',
                    'animal_scientific_name' => 'Phascolarctos cinereus',
                    'animal_description' => 'Koala hay không chính xác là gấu túi ( Phascolarctos cinereus ) là một loài thú có túi ăn cỏ sống trên cây có nguồn gốc từ Úc. Đây là đại diện duy nhất còn tồn tại của họ Phascolarctidae và họ hàng gần nhất còn sống của nó là wombat. Do ngoại hình đặc biệt của mình, gấu túi được công nhận trên toàn thế giới là biểu tượng của Úc. Chúng bị người Úc bản địa săn bắt và được miêu tả trong các câu chuyện thần thoại và nghệ thuật hang động trong nhiều thiên niên kỷ. Lần đầu tiên ghi nhận cuộc chạm trán giữa một người châu Âu và một con gấu túi là vào năm 1798, và một hình ảnh về loài vật này đã được nhà tự nhiên học George Perry công bố vào năm 1810.',
                    'appearance_description' => 'Koala là loài thú có túi quyến rũ với thân hình chắc nịch, đôi mắt nhỏ và đôi tai lớn. Bộ lông giống như len của loài vật này dày nhưng mềm, có màu xám tro. Bộ lông dày đặc ở phía dưới đóng vai trò như một chiếc đệm, cho phép gấu túi ngồi trên những cành cây thô. Phần dưới cũng như phần đầu của lông trên tai chúng có màu trắng. Ở giữa ngực, gấu túi đực trưởng thành có "tuyến mùi" màu nâu để nhận dạng. Một trong những đặc điểm chính của loài vật này là khứu giác rất mạnh, giúp chúng phân biệt được lá độc và lá ăn được. Chúng có những móng vuốt sắc nhọn lớn trên các chi dài, giúp chúng leo cây, cũng như 5 ngón tay, bao gồm cả ngón cái đối diện, cho phép chúng bám vào cành cây và thức ăn.',
                    'geography_description' =>'Koala phân bố khắp miền đông và đông nam nước Úc, bao gồm đông bắc, trung tâm và đông nam Queensland, miền đông New South Wales, Victoria cũng như các vùng đông nam của Nam Úc. Chúng có thể được tìm thấy trong các môi trường sống từ rừng tương đối thoáng đến rừng cây, và trong các vùng khí hậu từ nhiệt đới đến ôn đới mát mẻ. Ở các vùng khí hậu bán khô hạn, koala thích môi trường sống ven sông, nơi các con suối và lạch gần đó cung cấp nơi trú ẩn trong thời gian hạn hán và nhiệt độ cực cao.',
                    'habit_lifestyle_description' => 'Koala là loài động vật không thích giao lưu, chỉ tụ tập vào mùa sinh sản. Chúng thường tụ tập thành các nhóm lớn, lỏng lẻo ở những khu vực có nhiều cây thích hợp, mỗi cây chỉ có một cá thể. Trong suốt thời gian còn lại của năm, koala có xu hướng sống đơn độc, thể hiện rất ít hành vi giao lưu. Chúng là loài động vật sống trên cây, trú ngụ trên cây. Koala là loài leo trèo cực giỏi. Trong khi đó, khi ở dưới đất, chúng đi rất chậm. Vào ban ngày, loài động vật sống về đêm này thường ngủ trên nhánh cây bạch đàn. Bình thường, koala là loài động vật rất yên tĩnh. Tuy nhiên, khi bị đe dọa hoặc hoảng sợ, chúng thường kêu, giống như tiếng khóc của trẻ sơ sinh và kèm theo đó là tiếng rung. Ngoài ra, trong mùa sinh sản, con đực của loài này bắt đầu phát ra tiếng kêu rống. Koala cũng đánh dấu mùi trên cây của chúng, đây là một hình thức giao tiếp.',
                    'diet_nutrition_description' => 'Koala là loài động vật ăn cỏ (folivorous), chủ yếu ăn lá cây bạch đàn. Trong khi đó, chúng ăn lá của 30 loài cây bạch đàn khác nhau và bổ sung chế độ ăn uống thông thường của chúng bằng lá cây keo.',
                    'mating_habit_description' => 'Koala có hệ thống giao phối đa thê với con đực thống trị, giao phối với hầu hết con cái. Koala giao phối từ tháng 12 đến tháng 3. Thời kỳ mang thai ở koala chỉ kéo dài 35 ngày, chỉ sinh một con. Trong 5-6 tháng đầu đời, con non sống trong túi của mẹ, chỉ bú sữa. Đến 6 tháng tuổi, con non cai sữa. Sau đó, con non bắt đầu ăn pap - thực vật đã tiêu hóa một phần, có trong phân của mẹ. Khi được 7 tháng tuổi, con non chui ra khỏi túi của mẹ, bắt đầu bám vào lưng mẹ. Sau đó, khi được khoảng 1 tuổi, koala con trở nên độc lập, sau đó con non thường ở lại với mẹ thêm vài tháng nữa trước khi rời đi. Koala đực đạt đến độ tuổi trưởng thành về mặt sinh dục khi được 3-4 tuổi trong khi con cái trưởng thành khi được 2-3 tuổi.',
                    'mating_behavior' => 'Đa thê',
                    'reproduction_season' => 'Tháng 12-tháng 3',
                    'pregnancy_duration' => '35 ngày',
                    'baby_carrying' => '1 con',
                    'independent_age' => '1 năm',
                    'population_threat' => 'Mối đe dọa chính đối với quần thể gấu túi ở Úc là sự phá hủy, phân mảnh và thay đổi phạm vi tự nhiên của chúng, do đó, loài động vật này thường bị chó săn cũng như va chạm với xe cộ. Các mối đe dọa đáng chú ý khác bao gồm bệnh tật và cháy rừng. Các loài động vật này cũng phải chịu hạn hán, dẫn đến số lượng tử vong đáng kể ở một số quần thể gấu túi.',
                    'population_number' => 'Theo Sách đỏ IUCN, tổng số lượng quần thể gấu túi là khoảng 300.000 cá thể trưởng thành. Hiện tại, loài này được phân loại là loài dễ bị tổn thương (VU) trong Sách đỏ IUCN và số lượng của chúng hiện đang giảm dần.',
                    'ecological_niche' => '',
                    'fun_fact' => 'Koala dành phần lớn thời gian trong ngày (lên đến 18 giờ) để ngủ.
Bộ não của gấu túi chỉ chiếm chưa đến 0,2% trọng lượng cơ thể của loài động vật này, điều này kết hợp với chế độ ăn nghèo dinh dưỡng, là lý do khiến gấu túi có lối sống ít vận động.
Tên của chúng, "koala", bắt nguồn từ ngôn ngữ thổ dân và có nghĩa là "không có nước", những con vật này được gọi như vậy vì chúng hiếm khi uống nước và lấy độ ẩm cần thiết từ lá bạch đàn, tuy nhiên, khi nhiệt độ tăng, đôi khi koala mất một lượng nước lớn, dẫn đến mất nước.
Một con gấu túi tiêu thụ trung bình khoảng 1 kg lá mỗi ngày, đây là một lượng lớn đối với kích thước cơ thể của loài động vật này, chúng cũng có xu hướng sử dụng túi má của mình làm nơi dự trữ đồ ăn nhẹ từ lá.
Koala chỉ ăn lá trong một giai đoạn phát triển nhất định, chúng ăn 12 loài cây bạch đàn trong số hơn 100 loài được tìm thấy trên khắp nước Úc.
Gấu túi không chỉ leo trèo giỏi mà còn bơi giỏi, chúng có thể băng qua sông để thoát khỏi lũ lụt lớn trong phạm vi sống của chúng.
Con non của loài này không có lông, mù và nhỏ như hạt đậu.
Mẹ và con non có mối liên kết rất chặt chẽ; con cái rất vui khi được bế con mình đi khắp mọi nơi, cho đến khi con lớn lên và trở nên tự lập.
Tên khoa học của chúng là "Phascolarctoscinereus", trong đó từ tiếng Hy Lạp "phaskolos" có nghĩa là "túi", arktos có nghĩa là "gấu" và từ tiếng Latin "cinereus" có nghĩa là "màu tro".',
                    'top_speed' => '10',
                    'animal_length' => '60–85',
                    'animal_weight' => '4-15',
                    'animal_swing' => '',
                    'population_size' => '300.000',
                    'avg_lifespan' => '15',
                    'animal_sound' => 'koala.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/oI3ADcDH0Uc?si=KrmoiASFYlXQAMWR',
                    'conservation_status_id' => '3',
                    'activity_time_id' => '2',
                    'diet_type_id' => '4',
                    'category_id' => '5',
                    'population_trending_id' => '2',
                ],
                [
                    'animal_name' => 'Chim Cánh Cụt Hoàng Đế',
                    'animal_scientific_name' => 'Aptenodytes forsteri',
                    'animal_description' => 'Chim cánh cụt Hoàng đế ( Aptenodytes forsteri ) là loài chim cánh cụt cao nhất và nặng nhất trong số tất cả các loài chim cánh cụt còn sống và là loài đặc hữu của Nam Cực . Giống như tất cả các loài chim cánh cụt khác, chúng không biết bay, có thân hình thon dài, và đôi cánh cứng và dẹt thành vây để thích nghi với môi trường sống dưới nước. Tuổi thọ của chim cánh cụt Hoàng đế thường là 20 năm trong tự nhiên, mặc dù một số cá thể có thể sống đến 50 tuổi.',
                    'appearance_description' => 'Chim cánh cụt hoàng đế có bộ lông mượt mà, bao gồm những chiếc lông bóng, không thấm nước, giúp da không bị ướt. Bàn chân có màng của loài vật này giúp việc bơi lội dễ dàng hơn nhiều. Đầu to, cổ ngắn và dày, đuôi hình nêm và ngắn. Đôi cánh nhỏ của chim cánh cụt có hình dạng giống như vây. Đầu màu xanh đen được bao phủ bởi những mảng lớn màu trắng và vàng trên tai của loài vật này. Phần trên có màu xanh xám trong khi phần dưới có màu trắng, ngoại trừ phần ngực trên có màu vàng nhạt. Con đực và con cái của loài này có ngoại hình tương tự nhau.',
                    'geography_description' =>'Chim cánh cụt hoàng đế xuất hiện ở Deep South, phân bố dọc theo bờ biển và khắp vùng băng nén của lục địa Nam Cực. Chúng hầu như luôn sinh sản trên các tảng băng ổn định gần bờ biển và cách bờ biển tới 18 km (11 dặm). Các đàn sinh sản thường ở những khu vực có vách băng và tảng băng trôi bảo vệ khỏi gió',
                    'habit_lifestyle_description' => 'Những loài chim này không di cư, sống sâu trong Nam Đại Dương quanh năm. Chim cánh cụt hoàng đế có thể hoạt động vào bất kỳ thời điểm nào trong ngày và đêm. Chúng là loài chim rất hòa đồng, tụ tập thành từng nhóm để kiếm ăn và làm tổ. Chúng tạo thành các đàn làm tổ lớn; nếu thời tiết tốt và thường chỉ bảo vệ những khu vực nhỏ xung quanh chúng. Khi trời quá lạnh, những con chim tụ tập lại với nhau. Những con trưởng thành trong thời kỳ sinh sản phải liên tục di chuyển giữa các khu vực làm tổ và kiếm ăn quanh năm. Khi ở dưới nước, chim cánh cụt hoàng đế bơi rất giỏi; khi ở trên cạn, chúng hoặc đi bộ với dáng đi lạch bạch đặc trưng hoặc trượt trên bề mặt băng bằng bụng, đẩy mình bằng chân.',
                    'diet_nutrition_description' => 'Chim cánh cụt này là loài ăn thịt (ăn cá và ăn động vật thân mềm), chỉ ăn các loài động vật dưới nước. Chế độ ăn của chúng chủ yếu bao gồm nhuyễn thể và cá, bổ sung thêm mực và giáp xác.',
                    'mating_habit_description' => 'Chim cánh cụt hoàng đế có chế độ chung thủy theo từng cặp, mỗi mùa chỉ giao phối với một bạn tình. Vào tháng 3-tháng 4, những chú chim này trở về đàn sinh sản của mình. Thời kỳ mang thai kéo dài trong 63 ngày. Thông thường, một chú chim cánh cụt cái đẻ một quả trứng, để lại cho chú chim cánh cụt đực và bay ra biển. Chim cánh cụt đực có trách nhiệm giữ ấm cho trứng, mang trứng trên chân và ấp trứng trong 9 tuần. Trứng nở sau 70 ngày, trùng với thời gian chim mái trở về. Khi chim non nở ra, chim trống bay đi kiếm ăn, và lần này chim mái phải chăm sóc chim non, cho chim ăn và giữ ấm cho chim non. Chim non của chim cánh cụt hoàng đế lớn lên khá nhanh. Khi đạt đến độ tuổi 150 ngày, chim non sẽ trưởng thành. Chim cánh cụt đực bắt đầu sinh sản khi được 5-6 tuổi trong khi chim mái - khi được 5 tuổi.',
                    'mating_behavior' => 'Đơn phối ngẫu',
                    'reproduction_season' => 'Tháng 3-tháng 4',
                    'pregnancy_duration' => '63 ngày',
                    'baby_carrying' => '1 quả',
                    'independent_age' => '150 ngày',
                    'population_threat' => 'Sự nóng lên toàn cầu ảnh hưởng tiêu cực đến quần thể các loài động vật này, làm giảm diện tích băng trôi, môi trường sống tự nhiên của chim cánh cụt hoàng đế. Một mối lo ngại khác là các tàu đánh cá đôi khi vô tình bắt được những chú chim cánh cụt này trong lưới của họ.',
                    'population_number' => 'Tổng số ước tính của loài chim cánh cụt này là khoảng 595.000 cá thể trưởng thành. Mặc dù tổng số chim cánh cụt Hoàng đế hiện đang ổn định, nhưng theo Sách đỏ IUCN, loài này được phân loại là Gần bị đe dọa.',
                    'ecological_niche' => 'Chim cánh cụt hoàng đế là mắt xích không thể thay thế trong hệ sinh thái của phạm vi của chúng. Những loài chim này tiêu thụ nhiều loài sinh vật biển như cá nhỏ, động vật chân đầu hoặc giáp xác. Bên cạnh đó, chim cánh cụt là nguồn thức ăn quan trọng cho các loài săn mồi lớn hơn tại địa phương, bao gồm hải cẩu báo và cá mập lớn.',
                    'fun_fact' => 'Ở vùng cực Nam của Nam Cực, nơi những chú chim cánh cụt này sinh sống, nhiệt độ đôi khi xuống thấp tới -60 độ C, những chú chim này có thể sống sót nhờ có lượng mỡ dự trữ lớn trong cơ thể cũng như nhiều lớp lông giống như vảy, ngoài ra trong điều kiện thời tiết khắc nghiệt, các chú chim trong đàn tụm lại với nhau để giữ nhiệt.
Chim cánh cụt hoàng đế là loài bơi giỏi nhất và thợ lặn xuất sắc, chúng có thể lặn ở độ sâu lên tới 500 m, ở dưới nước trong khoảng 22 phút.
Đằng sau đôi mắt, những loài chim này sở hữu một tuyến đặc biệt trên ổ mắt, hoạt động như một bộ lọc, làm sạch máu khỏi muối, nhờ tuyến này chim cánh cụt có thể uống nước biển mặn khi săn mồi; sau đó muối được lọc và thải ra qua mỏ của động vật hoặc bằng cách hắt hơi.
Chim cánh cụt hoàng đế trải qua cái gọi là "sự thay lông thảm khốc": không giống như các loài chim khác, chỉ thay một vài chiếc lông cùng một lúc, chim cánh cụt hoàng đế rụng và mọc lại toàn bộ bộ lông cùng một lúc, thời gian thay lông kéo dài trong 2-3 tuần, trong thời gian đó chúng sống trên cạn mà không ra biển.
Đôi tai của chim cánh cụt hoàng đế không thể nhìn thấy được, nhưng loài chim này có thính giác rất tốt, giúp chúng tìm thấy nhau trong các đàn sinh sản lớn bằng cách phát ra những tiếng kêu riêng biệt.
Chim cánh cụt hoàng đế là loài chim rất mạnh mẽ, trong một trường hợp, một nhóm gồm 6 người đàn ông, cố gắng bắt một chú chim cánh cụt đực để làm bộ sưu tập cho sở thú, đã bị ném đi ném lại nhiều lần trước khi tất cả những người đàn ông phải cùng nhau giải quyết con chim, con chim này nặng khoảng một nửa người',
                    'top_speed' => '6-9',
                    'animal_length' => '76–89',
                    'animal_weight' => '22,7–45,4',
                    'animal_swing' => '',
                    'population_size' => '595.000',
                    'avg_lifespan' => '20',
                    'animal_sound' => 'emperor_penguin.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/MfstYSUscBc?si=AXje774b0Rz0ZD_N',
                    'conservation_status_id' => '1',
                    'activity_time_id' => '2',
                    'diet_type_id' => '2',
                    'category_id' => '53',
                    'population_trending_id' => '2',
                ],
                [
                    'animal_name' => 'Sư Tử Biển Steller',
                    'animal_scientific_name' => 'Eumetopias jubatus',
                    'animal_description' => 'Sư tử biển Steller ( Eumetopias jubatus ) là loài sư tử biển gần như bị đe dọa ở phía bắc Thái Bình Dương. Đây là thành viên duy nhất của chi Eumetopias và là loài hải cẩu tai lớn nhất (Otariidae). Trong số các loài chân màng, chúng chỉ nhỏ hơn loài hải mã và hai loài hải cẩu voi. Loài này được đặt theo tên của nhà tự nhiên học Georg Wilhelm Steller, người đầu tiên mô tả chúng vào năm 1741. Sư tử biển Steller đã thu hút được sự chú ý đáng kể trong những thập kỷ gần đây, do sự suy giảm đáng kể và phần lớn không giải thích được về số lượng của chúng trên một phần rộng lớn của phạm vi phân bố phía bắc của chúng ở Alaska .',
                    'appearance_description' => 'Sư tử biển Steller trưởng thành có màu nhạt hơn hầu hết các loài sư tử biển khác, từ vàng nhạt đến nâu vàng và đôi khi có màu đỏ. Con non khi sinh ra gần như có màu đen và vẫn có màu sẫm trong vài tháng. Cả con cái và con đực đều phát triển nhanh cho đến năm thứ năm, sau đó tốc độ phát triển của con cái chậm lại đáng kể. Con đực tiếp tục phát triển cho đến khi các đặc điểm sinh dục thứ cấp của chúng xuất hiện vào năm thứ năm đến năm thứ tám. Con đực dài hơn con cái một chút và có ngực, cổ và cấu trúc thân trước nói chung rộng hơn nhiều. Con đực được phân biệt rõ hơn với con cái bởi trán rộng và cao hơn, mõm phẳng hơn và bờm dày bằng lông thô quanh cổ lớn của chúng. Do đó, thật phù hợp khi tên tiếng Latin của chúng được dịch đại khái là "con có bờm với trán rộng".',
                    'geography_description' =>'Sư tử biển Steller sinh sống ở bờ biển phía bắc California, về phía bắc đến Alaska và trên bờ biển Nhật Bản và Nga. Chúng xuất hiện ở vùng nước mát của Bắc Thái Bình Dương, kéo dài trên bờ biển đá và trên các bãi biển.',
                    'habit_lifestyle_description' => 'Sư tử biển Steller thường sống theo bầy đàn và xuất hiện theo nhóm lớn trên bãi biển hoặc trong các bãi đẻ. Chúng thường sống theo nhóm từ hai đến mười hai con, nhưng đôi khi có tới hàng trăm con cùng nhau. Trên biển, chúng sống đơn độc hoặc theo nhóm nhỏ. Chúng kiếm ăn vào ban đêm gần bờ và ở vùng nước biển. Sư tử biển Steller có thể di chuyển quãng đường dài trong một mùa và có thể lặn xuống độ sâu khoảng 1300 feet (400 m); tuy nhiên, chúng không được coi là loài di cư. Chúng sử dụng đất liền làm nơi trú ngụ để nghỉ ngơi, lột xác, giao phối và sinh con. Chúng phát ra tiếng kêu mạnh mẽ kèm theo động tác lắc đầu theo chiều dọc ở con đực.',
                    'diet_nutrition_description' => 'Sư tử biển Steller là loài ăn thịt (động vật ăn cá, động vật thân mềm). Chúng chủ yếu ăn cá thu Atka, cá minh thái walleye, cá tuyết Thái Bình Dương và cá hồi Thái Bình Dương. Chúng cũng ăn bạch tuộc, mực, chân bụng và nhuyễn thể. Chúng đôi khi có thể săn hải cẩu cảng, hải cẩu đeo vòng, hải cẩu lông phương Bắc non và các loài động vật khác.',
                    'mating_habit_description' => 'Sư tử biển Steller có hệ thống giao phối đa thê. Những con đực duy nhất được phép giao phối là những con đực thống trị; tuy nhiên, những con đực trẻ hơn sẽ lẻn vào các bãi đẻ và cố gắng giao phối với những con cái mà con đực thống trị không để ý. Những con đực thống trị sẽ bảo vệ và giao phối với tới 30 con cái trong một mùa giao phối. Con cái sinh ra một con non duy nhất vào giữa tháng 5 và tháng 7 sau thời gian mang thai kéo dài khoảng 12 tháng. Con cái chăm sóc con của chúng tới 3 năm, cho chúng bú trong thời gian dài tới một năm, đôi khi lâu hơn. Con đực không tham gia nhiều vào việc chăm sóc con cái nhưng sẽ bảo vệ tất cả những con cái mà chúng đã giao phối. Cả con đực và con cái đều đạt đến độ tuổi trưởng thành từ 3 đến 6 tuổi. Do phải cạnh tranh với những con đực khác, hầu hết những con đực đực không có khả năng sinh sản thành công cho đến khi được 8 hoặc 10 tuổi.',
                    'mating_behavior' => 'Đa thê',
                    'reproduction_season' => 'Giữa tháng 5-tháng 7',
                    'pregnancy_duration' => '12 tháng',
                    'baby_carrying' => '1 con',
                    'independent_age' => '1-3 năm',
                    'population_threat' => 'Các mối đe dọa hiện tại đối với loài này bao gồm các vụ va chạm giữa thuyền/tàu, săn bắn/bắn trái phép, chất gây ô nhiễm, suy thoái môi trường sống, thăm dò dầu khí ngoài khơi, tương tác (gián tiếp và trực tiếp) với nghề cá, tác động trực tiếp chủ yếu là do ngư cụ (lưới rê, lưới dài, lưới kéo, v.v.) có thể móc, vướng, làm chúng bị thương hoặc giết chết, và tác động gián tiếp từ sự cạnh tranh thức ăn, những thay đổi có thể xảy ra đối với môi trường sống quan trọng, v.v.',
                    'population_number' => 'Theo Sách đỏ IUCN, tổng số lượng sư tử biển Steller là khoảng 160.867 cá thể. Bao gồm số lượng quần thể của hai quần thể được công nhận của loài này: quần thể sư tử biển Western Steller - 79.929 cá thể, với 55.791 con ở Hoa Kỳ và 24.138 con ở Nga; quần thể sư tử biển Loughlins Steller - khoảng 80.938 cá thể. Hiện tại, sư tử biển Steller được phân loại là Gần bị đe dọa (NT), tuy nhiên, số lượng của chúng ngày nay đang tăng lên.',
                    'ecological_niche' => 'Do chế độ ăn uống của mình, sư tử biển Steller có thể ảnh hưởng đến quần thể cá, nhuyễn thể hai mảnh vỏ, chân bụng và chân đầu.',
                    'fun_fact' => 'Các nhóm sư tử biển trên cạn được gọi là một đàn, dưới nước được gọi là bè, trong mùa sinh sản được gọi là ổ chim, và một số con cái trong lãnh thổ của con đực được gọi là hậu cung.
Sư tử biển Steller còn được gọi là “sói biển”: “seevitchie” đối với người Aleut và “sivuch” đối với người Nga.
Những con sư tử biển này có thể nín thở tới 40 phút. Khi chạy trốn khỏi những kẻ săn mồi như cá voi sát thủ, chúng có thể tăng tốc lên tới 40km/h.
Độ lặn sâu nhất mà một con sư tử biển Steller từng được ghi nhận là 424 mét.
Sư tử biển Steller rất hay kêu, một nhà khoa học mô tả chúng là "luôn hét vào mặt nhau", những chú sư tử biển con có thể xác định vị trí của mẹ chúng bằng âm thanh của mẹ, trong số hàng ngàn âm thanh khác, những chú sư tử đực gầm rú, những chú sư tử mẹ sủa, và những chú sư tử con kêu be be khiến cho nơi trú ẩn rất ồn ào',
                    'top_speed' => '40',
                    'animal_length' => '230–330',
                    'animal_weight' => '240–1120',
                    'animal_swing' => '',
                    'population_size' => '160.867',
                    'avg_lifespan' => '20-30',
                    'animal_sound' => 'steller_sealion.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/M5pi6wB3Nak?si=A_rEjigvpKWlgb_A',
                    'conservation_status_id' => '2',
                    'activity_time_id' => '1',
                    'diet_type_id' => '2',
                    'category_id' => '25',
                    'population_trending_id' => '1',
                ],
                [
                    'animal_name' => 'Thú Mỏ Vịt',
                    'animal_scientific_name' => 'Ornithorhynchus anatinus',
                    'animal_description' => 'Thú mỏ vịt ( Ornithorhynchus anatinus ), đôi khi được gọi là thú mỏ vịt , là một loài động vật có vú bán thủy sinh, đẻ trứng đặc hữu của miền đông Úc, bao gồm Tasmania . Cùng với bốn loài thú lông nhím , đây là một trong năm loài động vật đơn huyệt còn tồn tại. Thú mỏ vịt là một trong số ít loài động vật có vú đẻ trứng thay vì sinh con và là một trong số ít loài động vật có vú có nọc độc. Các đặc điểm độc đáo của thú mỏ vịt khiến nó trở thành một chủ đề quan trọng trong nghiên cứu về sinh học tiến hóa và là một biểu tượng dễ nhận biết và mang tính biểu tượng của Úc .',
                    'appearance_description' => 'Thú mỏ vịt có bộ lông dày giúp giữ ấm dưới nước. Hầu hết lông của nó có màu nâu sẫm, với một mảng sáng hơn gần mắt và màu sáng hơn ở mặt dưới. Trên bàn chân trước của nó có thêm lớp da đóng vai trò như mái chèo khi nó bơi. Thú mỏ vịt đi vụng về trên các đốt ngón tay để bảo vệ lớp da có màng này. Mỏ của nó nhẵn, linh hoạt và mềm như cao su, và có cảm giác như da lộn. Con đực có một chiếc gai độc ở bàn chân sau có đủ chất độc để gây ra cơn đau dữ dội cho con người.',
                    'geography_description' =>'Thú mỏ vịt được tìm thấy ở bờ biển phía Đông và Đông Nam của Úc cũng như Tasmania, Flinders và King Islands. Ngoài ra còn có một quần thể nhỏ được du nhập vào Đảo Kangaroo. Thú mỏ vịt bị giới hạn ở các dòng suối và các vùng nước ngọt thích hợp, bao gồm một số hồ chứa nước nông và ao.',
                    'habit_lifestyle_description' => 'Thú mỏ vịt sống đơn độc, đặc biệt là con đực. Nếu lãnh thổ của chúng chồng lấn lên nhau, chúng sẽ kiếm ăn vào những thời điểm khác nhau để tránh nhau. Chúng thường hoạt động về đêm và lúc chạng vạng, nhưng cũng có những cá thể hoạt động vào ban ngày, đặc biệt là khi bầu trời u ám. Thú mỏ vịt là loài bơi lội tuyệt vời và dành phần lớn thời gian dưới nước để kiếm thức ăn. Chúng dành nhiều thời gian để săn mồi, lên đến 10 đến 12 giờ và ở trong hang khi không săn mồi. Khi không ở dưới nước, thú mỏ vịt sẽ lui về hang nghỉ ngơi ngắn, thẳng có mặt cắt ngang hình bầu dục, gần như luôn ở bờ sông không xa mực nước và thường ẩn dưới một đám rễ cây bảo vệ.',
                    'diet_nutrition_description' => 'Thú mỏ vịt là loài ăn thịt, thức ăn của chúng là giun đốt, tôm nước ngọt, ấu trùng côn trùng và tôm nước ngọt đào bằng mõm từ lòng sông hoặc bắt được khi đang bơi.',
                    'mating_habit_description' => 'Thú mỏ vịt là loài đa thê (dâm đãng), cả con đực và con cái đều có nhiều bạn tình. Con cái có thể giao phối lần đầu tiên khi được 2 tuổi, nhưng một số con không giao phối cho đến khi được 5 tuổi. Mùa sinh sản diễn ra giữa những tháng mùa đông của Úc từ tháng 6 đến tháng 10. Khi con cái sẵn sàng sinh con, chúng đào hang xuống đất để tự nhốt mình trong một trong những căn phòng. Con cái đẻ 1 hoặc 2 quả trứng và giữ ấm giữa mông và đuôi. Trứng nở sau khoảng 10 ngày. Những con non nhỏ bằng hạt đậu sẽ bú sữa mẹ trong 4 đến 5 tháng. Chúng ở trong hang cho đến khi đạt được khoảng 80 phần trăm trọng lượng trưởng thành, khoảng 6 tháng.',
                    'mating_behavior' => 'Đa thê',
                    'reproduction_season' => 'Tháng 6-tháng 10',
                    'pregnancy_duration' => '10 ngày',
                    'baby_carrying' => '1-2 con',
                    'independent_age' => '4-5 tháng',
                    'population_threat' => 'Mối đe dọa lớn nhất đối với loài này là mất môi trường sống do khai hoang và ô nhiễm nước. Động vật ăn thịt là rắn, thằn lằn, chuột nước và cáo.',
                    'population_number' => 'Sách đỏ IUCN và các nguồn khác không cung cấp số lượng tổng thể của quần thể thú mỏ vịt. Hiện tại, loài này được phân loại là Gần bị đe dọa (NT) trong Sách đỏ IUCN và số lượng của chúng hiện đang giảm dần.',
                    'ecological_niche' => 'Thú mỏ vịt là loài ăn thịt, kiểm soát số lượng loài mà nó ăn.',
                    'fun_fact' => 'Các nhà tự nhiên học châu Âu lúc đầu nghĩ rằng thú mỏ vịt là một trò lừa bịp, và ai đó đã khâu mỏ vịt và đuôi rái cá lại với nhau và tạo ra một loài vật trông giống hải ly.
Tên "thú mỏ vịt" bắt nguồn từ tiếng Hy Lạp "platys", nghĩa là rộng, và "pous", nghĩa là chân.
Thú mỏ vịt có thể gầm gừ như chó con.
Thú mỏ vịt sử dụng mõm để tìm kiếm con mồi. Miệng của nó nằm dưới mõm.
Thú mỏ vịt sử dụng đuôi để dự trữ chất béo, khoảng 50% cơ thể là chất béo.
Thú mỏ vịt sử dụng chân trước để chèo và lái bằng chân sau và đuôi',
                    'top_speed' => '35',
                    'animal_length' => '43-50',
                    'animal_weight' => '0.7-2.4',
                    'animal_swing' => '',
                    'population_size' => 'KHÔNG XÁC ĐỊNH',
                    'avg_lifespan' => '12-20',
                    'animal_sound' => 'platypus.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/OQryoS-t45g?si=RL7sYu9d-1u4yw2c',
                    'conservation_status_id' => '2',
                    'activity_time_id' => '2',
                    'diet_type_id' => '2',
                    'category_id' => '5',
                    'population_trending_id' => '2',
                ],
                [
                    'animal_name' => 'Khỉ Mũi Hếch Vàng',
                    'animal_scientific_name' => 'Rhinopithecus roxellana',
                    'animal_description' => 'Khỉ mũi hếch vàng ( Rhinopithecus roxellana ) là loài khỉ Cựu thế giới đặc hữu ở một khu vực nhỏ trong các khu rừng miền núi ôn đới ở miền trung và Tây Nam Trung Quốc. Tuyết thường xuyên xuất hiện trong phạm vi của chúng và chúng có thể chịu được nhiệt độ trung bình lạnh hơn tốt hơn bất kỳ loài linh trưởng nào khác không phải người. Trong số ba loài khỉ mũi hếch ở Trung Quốc , khỉ mũi hếch vàng là loài phân bố rộng rãi nhất trên khắp Trung Quốc.',
                    'appearance_description' => 'Con đực trưởng thành của loài này có thân hình lớn được bao phủ bởi những sợi lông bảo vệ màu vàng rất dài trên lưng và vùng áo choàng. Mào có màu nâu vừa trong khi lưng, từ đỉnh đầu đến gáy, cánh tay và đùi ngoài có màu nâu sẫm. Mào nâu cũng chứa những sợi lông thẳng đứng, có hình dạng hữu ích để nhận dạng từng cá thể. Ngoài ra, khi miệng chúng mở, các nhà nghiên cứu có thể quan sát thấy răng nanh dài. Chúng thường dài từ 58 cm đến 68 cm và nặng khoảng 16,4 kg. Ở những con đực chưa trưởng thành, những sợi lông bảo vệ màu vàng trên áo choàng ngắn và thưa thớt, và mào nâu trung bình của chúng có các dải nhỏ, đồng thời cũng chuyển từ màu nâu. Con cái trưởng thành có kích thước nhỏ hơn và chỉ bằng khoảng một nửa kích thước của con đực trưởng thành. Phần lưng, từ đỉnh đầu đến gáy, áo choàng, cánh tay và đùi ngoài có màu nâu đến nâu sẫm ở một số con cái già hơn. Tuy nhiên, những sợi lông bảo vệ màu vàng cũng có trên lưng và vùng áo choàng, nhưng chúng ngắn hơn so với con đực. Mào nâu có các dải nhỏ. Con cái bán trưởng thành nhỏ hơn con cái trưởng thành và chỉ bằng khoảng hai phần ba kích thước. Lông trên cơ thể có màu nâu, dần chuyển sang màu vàng nhưng không có lông bảo vệ màu vàng. Mào nâu ở giữa của chúng cũng cho thấy các dải lông nhỏ. Con non khá nhỏ, nhỏ hơn hai phần ba kích thước của con cái trưởng thành. Lông trên cơ thể của chúng có màu nâu nhạt, dần chuyển sang màu vàng đỏ. Phần còn lại của cơ thể (lưng, đỉnh đầu đến gáy, áo choàng, cánh tay và đùi ngoài) có lông màu nâu. Không thể nhận ra lông màu vàng ở vùng lưng hoặc áo choàng cũng như không có mào nâu ở giữa ở con cái và con đực bán trưởng thành đến trưởng thành.',
                    'geography_description' =>'Phạm vi tự nhiên của khỉ mũi hếch vàng trải dài khắp miền tây-trung bộ Trung Quốc, cụ thể là ở các tỉnh Tứ Xuyên, Cam Túc, Hồ Bắc và Thiểm Tây. Trong khu vực này, khỉ mũi hếch vàng thường được tìm thấy ở các khu rừng núi cao, rừng lá rộng rụng lá và rừng lá kim. Trong những tháng mùa đông, chúng thường di chuyển đến những vùng đất thấp hơn.',
                    'habit_lifestyle_description' => 'Khỉ mũi hếch vàng rất thích giao lưu. Vào những tháng mùa hè, khỉ mũi hếch vàng tụ tập thành những nhóm lớn lên đến 200 cá thể. Vào mùa đông, loài động vật này thường sống theo nhóm nhỏ hơn gồm 20-30 con. Thỉnh thoảng, người ta có thể quan sát thấy chúng tụ tập thành từng đàn lớn lên đến 600 cá thể, gồm nhiều nhóm, sau đó được chia thành các đơn vị gia đình nhỏ hơn bao gồm một con đực thống trị duy nhất và khoảng 4 con cái cùng con của chúng. Bảo vệ con non là nỗ lực của cả nhóm. Những con mẹ thường có người giúp đỡ chăm sóc con non. Khi gặp nguy hiểm từ động vật săn mồi như diều hâu phương Bắc, những con non được đặt ở trung tâm của nhóm trong khi những con đực trưởng thành khỏe hơn sẽ đến hiện trường báo động. Trong phần còn lại của ngày, các thành viên trong nhóm vẫn ở gần nhau hơn với những con non được bảo vệ ở trung tâm. Khỉ mũi hếch vàng dành phần lớn thời gian hoạt động của mình trên cây, mặc dù chúng cũng được biết đến là kiếm ăn trên mặt đất. Khi bị đe dọa, chúng trèo lên cây cao để trú ẩn. Khỉ mũi hếch vàng là loài linh trưởng rất hay kêu. Cá thể của cả hai giới đều sử dụng các âm thanh như tiếng gầm gừ, tiếng thở dài, tiếng rên rỉ hoặc tiếng ợ. Tuy nhiên, con đực và con cái có thể sử dụng các tiếng kêu khác nhau. Ví dụ, khi chải lông hoặc cho ăn, con đực của loài này được biết là phát ra tiếng rên rỉ nhận dạng - tiếng kêu do dự kéo dài, được con cái đáp lại bằng tiếng kêu the thé và tiếng kêu the thé. Ngoài ra, con cái thường có thể được nghe thấy phát ra tiếng kêu chucks - tiếng kêu "ee-tcha", liên quan đến sự kích thích.',
                    'diet_nutrition_description' => 'Là loài ăn cỏ, khỉ mũi hếch vàng tiêu thụ nhiều loại thức ăn. Chế độ ăn của chúng thường bao gồm lá thông và cây linh sam non, được bổ sung thêm măng, lá, chồi và quả.',
                    'mating_habit_description' => 'Khỉ mũi hếch vàng là loài đa thê, có nghĩa là một con đực có quyền độc quyền giao phối với nhiều con cái. Theo quy tắc chung, những con cái dễ tiếp nhận là những con khởi xướng giao phối, thông báo sự sẵn sàng của chúng thông qua nhiều tín hiệu và tư thế khác nhau. Chúng sinh sản quanh năm với thời kỳ đỉnh điểm diễn ra vào tháng 9-11. Hầu hết các ca sinh nở diễn ra vào tháng 3-5. Thời kỳ mang thai kéo dài trong 7 tháng, cho ra đời một con duy nhất. Trong vài ngày đầu sau khi sinh, con non được mẹ cho bú và bế trên tay, liên tục ở bên mẹ cho đến khi được khoảng 20 ngày tuổi. Sau đó, khỉ con bắt đầu sống với nhóm mẹ của mình và cai sữa khi được 1 tuổi. Con đực của loài này sẵn sàng giao phối khi được 7 tuổi, trong khi con cái trưởng thành khi được 4-5 tuổi.',
                    'mating_behavior' => 'Đa thê',
                    'reproduction_season' => 'Quanh năm, đỉnh điểm vào tháng 9-tháng 11',
                    'pregnancy_duration' => '7 tháng',
                    'baby_carrying' => '1 con',
                    'independent_age' => '1 năm',
                    'population_threat' => 'Khỉ mũi hếch vàng hiện đang phải chịu đựng nạn săn bắt quy mô lớn để kiếm thức ăn. Bộ lông của loài động vật này có giá trị thương mại, trong khi một số bộ phận cơ thể của chúng được sử dụng trong y học cổ truyền. Hơn nữa, toàn bộ cộng đồng đã được biết đến là tham gia vào việc vây bắt những con vật này. Khỉ mũi hếch vàng cũng bị săn trộm để bán cho các sở thú. Và cuối cùng, những loài linh trưởng này đang bị đe dọa bởi sự mất đi phạm vi tự nhiên của chúng do nạn phá rừng và suy thoái môi trường sống.',
                    'population_number' => 'Theo Sách đỏ IUCN, tổng số lượng loài voọc mũi hếch vàng vào khoảng 15.000 cá thể, bao gồm ước tính về quần thể của các phân loài sau: Voọc mũi hếch vàng Moupin - 10.000 cá thể/100 đàn ở Tứ Xuân (cụ thể là 6.000 ở núi Minh Sơn, 3.500 ở núi Quỳnh Lai và 500 ở núi Đại Hương Lĩnh và Tiểu Tiên Lĩnh), 800 con/8 đàn ở Cam Túc và cuối cùng là 170-200 con/1-2 đàn ở Thiểm Tây; Voọc mũi hếch vàng Quinling - khoảng 3.800-4.000 cá thể/39 đàn; và Voọc mũi hếch vàng Hồ Bắc - khoảng 600-1.000 con/5-6 đàn. Nhìn chung, quần thể khỉ mũi hếch vàng hiện nay đang giảm dần và loài động vật này được xếp vào loại Nguy cấp (EN) trong Sách đỏ IUCN.',
                    'ecological_niche' => '',
                    'fun_fact' => 'Khỉ mũi hếch vàng thuộc nhóm khỉ Cựu thế giới. Đuôi của những con vật này được bao phủ bởi lớp lông dày, đóng vai trò như một chiếc đệm để ngồi, tuy nhiên đuôi của chúng không có tác dụng treo trên cây hoặc bám vào các vật thể. Ngoài ra, chúng có lỗ mũi giống người nằm gần nhau.
Khi ngủ, chúng tụ tập lại thành từng nhóm. Cách ngủ này giúp chúng giữ nhiệt trong những đêm lạnh, con cái và con non thường tụ tập lại với nhau, trong khi con đực ngủ riêng.
Nguồn gốc chiếc mũi và đặc điểm khuôn mặt khác thường của chúng hiện vẫn chưa được biết rõ.
Loài này có tên khoa học theo tên Roxellana, vợ của Süleyman the Magnificent, quốc vương Ottoman, người ta nói rằng bà có mái tóc vàng đỏ và chiếc mũi tẹt',
                    'top_speed' => '',
                    'animal_length' => '57-76',
                    'animal_weight' => '6.5-39',
                    'animal_swing' => '',
                    'population_size' => '15.000',
                    'avg_lifespan' => '26',
                    'animal_sound' => 'golden_monkey.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/rWH4XGO1KSU?si=aH7bAbDb3oYC1m46',
                    'conservation_status_id' => '4',
                    'activity_time_id' => '1',
                    'diet_type_id' => '1',
                    'category_id' => '14',
                    'population_trending_id' => '2',
                ],
                [
                    'animal_name' => 'Chuột Lang Nước',
                    'animal_scientific_name' => 'Hydrochoerus hydrochaeris',
                    'animal_description' => 'Chuột lang nước ( Hydrochoerus hydrochaeris ) là loài gặm nhấm khổng lồ có nguồn gốc từ Nam Mỹ . Đây là loài gặm nhấm lớn nhất còn sống và là thành viên của chi Hydrochoerus . Họ hàng gần của nó bao gồm chuột lang và chuột lang đá , và nó có họ hàng xa hơn với agouti, chinchilla và nutria.',
                    'appearance_description' => 'Chuột lang nước có thân hình thùng nặng và đầu ngắn, với bộ lông màu nâu đỏ ở phần trên cơ thể chuyển sang màu nâu vàng ở bên dưới. Tuyến mồ hôi của chúng có thể được tìm thấy trên bề mặt của các phần lông trên da, một đặc điểm khác thường ở các loài gặm nhấm. Loài vật này không có lông tơ, và lớp lông bảo vệ của chúng không khác nhiều so với lớp lông trên. Chuột lang nước có bàn chân hơi có màng và đuôi thoái hóa. Chân sau của chúng dài hơn chân trước một chút; chúng có ba ngón chân ở chân sau và bốn ngón chân ở chân trước. Mõm của chúng tù, có lỗ mũi, mắt và tai nằm gần đỉnh đầu.',
                    'geography_description' =>'Phạm vi phân bố của loài chuột lang nước bao phủ một khu vực rộng lớn, trải dài trên phần lớn Nam Mỹ đến phía đông dãy Andes, từ Colombia và Venezuela về phía nam đến phía bắc Argentina. Chuột lang nước được tìm thấy ở các vùng đất thấp gần nguồn nước. Môi trường sống ưa thích bao gồm các hồ và sông trong rừng mưa nhiệt đới, đầm lầy, vùng đất ngập nước lợ, đầm lầy cũng như đồng cỏ và thảo nguyên ngập nước theo mùa.',
                    'habit_lifestyle_description' => 'Chuột lang nước là loài động vật xã hội, tạo thành các đơn vị gia đình gồm 10 - 30 con, mặc dù quy mô nhóm thường phụ thuộc vào môi trường. Do đó, trong mùa khô, khi các loài động vật tụ tập tại các vũng nước đang cạn dần, có thể quan sát thấy các nhóm tập trung tạm thời lên tới 100 cá thể. Một nhóm gia đình điển hình của chuột lang nước bao gồm một con đực thống trị, một hoặc nhiều con đực cấp dưới, một hoặc nhiều con cái có quan hệ họ hàng cũng như con cái ở các độ tuổi khác nhau. Trong khi đó, con đực có xu hướng đơn độc hơn. Các cá thể trưởng thành trong nhóm tham gia bảo vệ lãnh thổ của chúng khỏi những kẻ xâm lược, đánh dấu phạm vi của chúng bằng mùi hương tiết ra từ tuyến mùi của chúng. Là loài hoạt động vào lúc chạng vạng, chuột lang nước dành thời gian ban ngày để nghỉ ngơi và hoạt động vào buổi sáng và buổi tối. Trong khi chuột lang nước phải đối mặt với sự săn đuổi của con người, chúng thường có xu hướng hoạt động về đêm. Khi bị đe dọa, những loài động vật này được biết là sẽ chạy trốn, hoặc chạy trên đất liền hoặc lặn xuống nước.',
                    'diet_nutrition_description' => 'Chuột lang nước là loài ăn cỏ (graminivore). Là loài gặm cỏ, loài gặm nhấm này chủ yếu ăn cỏ và thực vật thủy sinh, bổ sung chế độ ăn của chúng bằng vỏ cây và trái cây. Là loài ăn phân, chúng ăn lại thức ăn của ngày hôm trước.',
                    'mating_habit_description' => 'Những loài động vật này có hệ thống giao phối từ đa thê đến đa phu (lăng nhăng), trong đó các cá thể của cả hai giới có thể giao phối với nhiều bạn tình. Những con đực thống trị thường hạn chế khả năng tiếp cận những con đực khác đối với con cái. Cả con đực và con cái đều có thể chọn bạn tình. Giao phối diễn ra dưới nước. Nếu một con cái không muốn giao phối với con đực, nó có thể lặn hoặc ra khỏi nước. Chuột lang nước sinh sản quanh năm với thời kỳ đỉnh điểm diễn ra từ tháng 5 đến tháng 6, trùng với đầu mùa mưa. Thời kỳ mang thai kéo dài 150 ngày, cho ra một lứa từ 2-8 con non. Con cái của loài này được sinh ra đã biết đi. Sau một thời gian ngắn, những con non có thể đứng và đi. Trong tuần đầu tiên của cuộc đời, chúng bắt đầu gặm cỏ. Mẹ và những con cái khác có quan hệ họ hàng trong nhóm sẽ cho con bú cho đến khi cai sữa, xảy ra khi được 3 tháng tuổi. Sau đó, con non vẫn ở trong nhóm của cha mẹ cho đến khi được 1 tuổi, trưởng thành khi được 12-18 tháng tuổi.',
                    'mating_behavior' => 'Đa thê',
                    'reproduction_season' => 'Quanh năm, cao điểm vào tháng 5-6',
                    'pregnancy_duration' => '150 ngày',
                    'baby_carrying' => '2-8 con',
                    'independent_age' => '1 năm',
                    'population_threat' => 'Một trong những mối đe dọa lớn nhất đối với toàn bộ quần thể loài này là nạn săn bắt. Những con vật này bị săn bắt để lấy thịt và da. Chúng cũng thu hút thợ săn để lấy mỡ, có trong lớp da dày và nhiều mỡ của chúng, có giá trị dược phẩm. Chuột lang nước được coi là loài gây hại và bị nông dân giết chết, những người tin rằng những con vật này phá hủy ngũ cốc hoặc cây ăn quả cũng như cạnh tranh với gia súc trong nước, điều này không đúng.',
                    'population_number' => 'Theo IUCN, loài Capybara phổ biến tại địa phương và phân bố rộng rãi trên toàn bộ phạm vi của nó nhưng không có ước tính tổng thể về quần thể. Hiện tại, loài này được phân loại là loài ít quan tâm (LC) trong Sách đỏ IUCN.',
                    'ecological_niche' => 'Ở một số khu vực nhất định trong phạm vi sinh sống của chúng, những loài động vật này là loài ăn cỏ lớn duy nhất, kiểm soát thảm thực vật của khu vực. Mặt khác, chuột lang nước là nguồn thức ăn cho báo đốm, trăn anaconda xanh, cá sấu caiman đeo kính và các loài ăn thịt khác trong môi trường sống của chúng.',
                    'fun_fact' => 'Từ "capybara" có nghĩa là "loài ăn lá mỏng" trong tiếng Tupi, được sử dụng ở Brazil.
Không giống như hầu hết các loài gặm nhấm, chuột lang nước không thể giữ thức ăn bằng chân trước khi ăn, chúng được biết đến là ngồi trên hông ở tư thế giống như chó.
Chuột lang nước là loài động vật có khả năng huấn luyện cao, ở Surinam người ta đã biết đến trường hợp một người đàn ông mù sử dụng loài động vật này làm vật dẫn đường.
Chuột lang nước con không phải là loài bơi giỏi. Do đó, chúng có xu hướng dành thời gian trên cạn, thường trú ẩn dưới bụi rậm.
Hai chiếc răng cửa nổi bật của loài động vật này liên tục mọc trong suốt cuộc đời.
Chuột lang nước sử dụng nhiều âm thanh khác nhau làm hình thức giao tiếp chính giữa các loài cùng loài, các tiếng kêu điển hình bao gồm tiếng gầm gừ, tiếng hí, tiếng sủa báo động và tiếng huýt sáo, chuột lang nước con được biết là phát ra tiếng gừ gừ liên tục.
Khi cố gắng ẩn náu, loài gặm nhấm này lặn xuống và ở dưới nước tới 5 phút.
Chuột nước có hai loại tuyến mùi: tuyến morrillo nằm trên mũi và tuyến mùi nằm dưới đuôi',
                    'top_speed' => '35',
                    'animal_length' => '106-134',
                    'animal_weight' => '35-66',
                    'animal_swing' => '',
                    'population_size' => 'KHÔNG XÁC ĐỊNH',
                    'avg_lifespan' => '6-12',
                    'animal_sound' => 'capybara.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/tTAzn85u_lE?si=D3lee-pzBIyxuC3u',
                    'conservation_status_id' => '1',
                    'activity_time_id' => '1',
                    'diet_type_id' => '1',
                    'category_id' => '5',
                    'population_trending_id' => '3',
                ],
                [
                    'animal_name' => 'Rùa Cá Sấu',
                    'animal_scientific_name' => 'Macrochelys temminckii',
                    'animal_description' => 'Rùa cá sấu ( Macrochelys temminckii) là một loài rùa lớn trong họ Chelydridae . Loài này là một trong những loài rùa nước ngọt nặng nhất thế giới. Đây cũng là loài rùa nước ngọt lớn nhất ở Bắc Mỹ . Tên gọi cụ thể temminckii là để vinh danh nhà động vật học người Hà Lan Coenraad Jacob Temminck.',
                    'appearance_description' => 'Rùa cá sấu được đặt tên phổ biến là do bộ hàm cực kỳ khỏe và các đường gờ rõ rệt trên mai trông giống với lớp da thô ráp, có gờ của cá sấu. Rùa cá sấu có đầu to, nặng và mai dài, dày với ba đường gờ trên lưng có vảy lớn (lớp xương), khiến chúng có vẻ ngoài nguyên thủy gợi nhớ đến một số loài khủng long có vảy. Rùa có màu xám, nâu, đen hoặc xanh ô liu, và thường được bao phủ bởi tảo. Chúng có các hoa văn màu vàng tỏa ra xung quanh mắt, có tác dụng phá vỡ đường viền của mắt để giúp rùa ngụy trang. Mắt của chúng cũng được bao quanh bởi một lớp "lông mi" hình sao, nhiều sợi, mọng nước.',
                    'geography_description' =>'Rùa cá sấu chủ yếu được tìm thấy ở vùng biển phía đông nam Hoa Kỳ. Chúng được tìm thấy từ Florida Panhandle về phía tây đến Đông Texas, phía bắc đến đông nam Kansas, Missouri, đông nam Iowa, phía tây Illinois, phía nam Indiana, phía tây Kentucky và phía tây Tennessee. Chúng được tìm thấy trên Sông Missouri ít nhất là xa về phía bắc đến Đập Gavins Point, đập cực nam trên Sông Missouri tại Yankton, Nam Dakota và được trưng bày trong Thủy cung Đập Gavins Point. Rùa cá sấu sống ở sông, hồ và kênh rạch.',
                    'habit_lifestyle_description' => 'Rùa cá sấu dành phần lớn cuộc đời của chúng dưới nước và chỉ những con cái làm tổ mới mạo hiểm lên vùng đất trống. Chúng là loài sống đơn độc. Những con rùa này thường săn mồi vào ban đêm, tuy nhiên, chúng cũng có thể kiếm ăn vào ban ngày. Vào ban ngày, chúng có thể cố gắng thu hút cá và các con mồi khác bằng cách ngồi im lặng dưới đáy nước đục và để hàm mở ra để lộ lưỡi, trông giống như những con mồi nhỏ màu hồng, giống như giun ở phía sau miệng màu xám của chúng, và dụ con mồi vào khoảng cách tấn công. Những con cá nhỏ, chẳng hạn như cá mồi, thường bị những con rùa cá sấu non bắt theo cách này, trong khi những con trưởng thành phải ăn nhiều hơn mỗi ngày và phải kiếm ăn tích cực hơn. Những con rùa này có thể ở dưới nước trong 40-50 phút trước khi nổi lên mặt nước để thở và thậm chí sẽ ngủ đông vào mùa đông dưới đáy ao và hồ. Khi ở dưới nước, rùa cá sấu có thể nằm bất động đến mức tảo có thể phủ kín lưng chúng và khiến rùa gần như vô hình đối với cá.',
                    'diet_nutrition_description' => 'Rùa cá sấu hầu như hoàn toàn ăn thịt. Chế độ ăn tự nhiên của chúng chủ yếu bao gồm cá và xác cá, động vật thân mềm, xác thối và động vật lưỡng cư. Chúng cũng ăn rắn, tôm càng, giun, chim nước, thực vật thủy sinh, các loài rùa khác và đôi khi thậm chí cả cá sấu.',
                    'mating_habit_description' => 'Rùa cá sấu là loài đa thê, có nghĩa là cả con đực và con cái đều giao phối với nhiều bạn tình. Mùa sinh sản của chúng diễn ra hàng năm, vào đầu mùa xuân ở phía nam phạm vi phân bố của chúng và muộn hơn vào mùa xuân ở phía bắc. Con cái xây tổ và đẻ một lứa từ 10-50 trứng sau khoảng hai tháng. Giới tính của rùa con phụ thuộc vào nhiệt độ ấp trứng. Tổ thường được đào cách mép nước ít nhất 50 yard để tránh bị ngập và chết đuối. Thời gian ấp trứng từ 100 đến 140 ngày và rùa con nở ra vào đầu mùa thu. Chúng độc lập khi mới sinh và không cần sự chăm sóc của cha mẹ. Rùa cá sấu con đạt đến độ tuổi trưởng thành sinh sản khi khoảng 12 tuổi.',
                    'mating_behavior' => 'Đa thê',
                    'reproduction_season' => 'Mùa xuân',
                    'pregnancy_duration' => '100 - 140 ngày',
                    'baby_carrying' => '8 - 52 trứng',
                    'independent_age' => 'Khi vừa sinh ra',
                    'population_threat' => 'Các mối đe dọa chính đối với rùa cá sấu bao gồm việc săn bắt để làm thú cưng lạ, khai thác quá mức để lấy thịt, ô nhiễm và phá hủy môi trường sống.',
                    'population_number' => 'Sách đỏ IUCN và các nguồn khác không cung cấp số lượng tổng thể của loài rùa cá sấu. Hiện tại, loài này được phân loại là loài dễ bị tổn thương (VU) trong Sách đỏ IUCN.',
                    'ecological_niche' => 'Rùa cá sấu rất quan trọng vì chúng là loài săn mồi và ăn xác thối chính trong môi trường của chúng. Những con rùa này giúp kiểm soát quần thể các loài con mồi chính của chúng và cũng giúp dọn dẹp môi trường sống của chúng bằng cách ăn xác thối.',
                    'fun_fact' => '',
                    'top_speed' => '',
                    'animal_length' => '35-81',
                    'animal_weight' => '8.4-80',
                    'animal_swing' => '',
                    'population_size' => 'KHÔNG XÁC ĐỊNH',
                    'avg_lifespan' => '20-70',
                    'animal_sound' => '',
                    'animal_video' => 'https://www.youtube.com/embed/6ui8Jdco_QA?si=IHG4sX8DmzPxJPR1',
                    'conservation_status_id' => '3',
                    'activity_time_id' => '2',
                    'diet_type_id' => '2',
                    'category_id' => '55',
                    'population_trending_id' => '2',
                ],
                [
                    'animal_name' => 'Rắn Sừng Sa Mạc',
                    'animal_scientific_name' => 'Cerastes cerastes',
                    'animal_description' => 'Rắn lục sừng Sahara ( Cerastes cerastes ) là loài rắn độc có nguồn gốc từ Bắc Phi và một số vùng của Bán đảo Ả Rập và Levant. Loài này thường dễ dàng nhận biết bằng cặp "sừng" trên mắt, mặc dù cũng có những cá thể không có sừng.',
                    'appearance_description' => 'Một trong những đặc điểm nổi bật nhất của rắn lục sừng Sahara là sự hiện diện của "sừng" trên ổ mắt, một cái trên mỗi mắt. Tuy nhiên, những cái này có thể bị giảm kích thước hoặc không có. Đôi mắt của loài rắn này nổi bật và nằm ở hai bên đầu. Có sự dị hình giới tính đáng kể, với con đực có đầu lớn hơn và mắt to hơn con cái. Hoa văn màu sắc bao gồm màu nền hơi vàng, xám nhạt, hồng, đỏ hoặc nâu nhạt, gần như luôn trùng với màu nền nơi rắn lục sừng Sahara được tìm thấy. Ở mặt lưng, một loạt các đốm đen, bán chữ nhật chạy dọc theo chiều dài của cơ thể. Những đốm này có thể hoặc không thể hợp nhất thành các thanh ngang. Bụng có màu trắng. Đuôi, có thể có đầu màu đen, thường mỏng.',
                    'geography_description' =>'Rắn lục sừng Sahara được tìm thấy ở Bắc Phi khô cằn (Morocco, Mauritania và Mali, về phía đông qua Algeria, Tunisia, Niger, Libya và Chad đến Ai Cập, Sudan, Ethiopia và Somalia) qua Sinai đến phía bắc Negev. Ở Bán đảo Ả Rập, chúng xuất hiện ở Yemen, Kuwait, cực tây nam Ả Rập Saudi và một số vùng của đất nước ở Qatar. Những con rắn này ưa thích những vùng đất khô, nhiều cát với những mỏm đá thưa thớt và có xu hướng không thích cát thô. Chúng cũng có thể được tìm thấy xung quanh các ốc đảo.',
                    'habit_lifestyle_description' => 'Rắn lục sừng Sahara là loài sống đơn độc và hoạt động về đêm. Chúng dành cả ngày để nghỉ ngơi trong các hang cát, ẩn núp trong các lỗ, dưới đá hoặc trong các hang bỏ hoang. Chúng thường di chuyển bằng cách uốn lượn, trong quá trình đó, chúng đè trọng lượng của mình xuống cát hoặc đất, để lại dấu ấn trên toàn bộ cơ thể. Những con rắn này có tính khí khá điềm tĩnh, nhưng nếu bị đe dọa, chúng có thể rít lên, tạo tư thế hình chữ C và nhanh chóng cọ xát các cuộn dây của mình vào nhau tạo ra tiếng khàn khàn. Rắn lục sừng Sahara là loài săn mồi phục kích; chúng săn con mồi của mình bằng cách nằm chìm trong cát cạnh các tảng đá hoặc dưới thảm thực vật. Khi tiếp cận, chúng tấn công rất nhanh, giữ chặt con mồi đã bắt được cho đến khi nọc độc có tác dụng.',
                    'diet_nutrition_description' => 'Rắn lục sừng Sahara là loài ăn thịt. Thức ăn của chúng chủ yếu là thằn lằn, nhưng cũng có cả các loài gặm nhấm nhỏ và chim.',
                    'mating_habit_description' => 'Trong điều kiện nuôi nhốt, rắn lục sừng Sahara giao phối vào tháng 4. Những con rắn này đẻ trứng, đẻ 8-23 trứng nở sau 50 đến 80 ngày ấp. Con cái thường đẻ trứng dưới đá và trong hang động bỏ hoang của loài gặm nhấm. Những con non có chiều dài tổng thể là 12-15 cm (khoảng 5-6 inch) và hoàn toàn không phụ thuộc vào sự chăm sóc của cha mẹ. Chúng trưởng thành về mặt sinh sản khi được 2 tuổi.',
                    'mating_behavior' => 'Đơn thê',
                    'reproduction_season' => 'Tháng 4',
                    'pregnancy_duration' => '50-80 ngày',
                    'baby_carrying' => '8-23 trứng',
                    'independent_age' => 'Khi vừa sinh ra',
                    'population_threat' => 'Hiện nay không có mối đe dọa lớn nào đối với loài rắn lục sừng Sahara.',
                    'population_number' => 'Hiện nay, rắn lục sừng Sahara không có trong Sách đỏ IUCN và tình trạng bảo tồn của loài này vẫn chưa được đánh giá.',
                    'ecological_niche' => 'Do thói quen ăn uống của chúng, những con rắn này là loài săn mồi quan trọng trong hệ sinh thái mà chúng sinh sống. Chúng giúp kiểm soát quần thể loài gặm nhấm thường quấy rầy gia súc và nguồn thức ăn của người dân địa phương.',
                    'fun_fact' => '',
                    'top_speed' => '',
                    'animal_length' => '30-60',
                    'animal_weight' => '0.1-0.3',
                    'animal_swing' => '',
                    'population_size' => 'KHÔNG XÁC ĐỊNH',
                    'avg_lifespan' => '15-18',
                    'animal_sound' => 'saharan_horned_viper.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/qOJZ9MswAAA?si=ZDZt0HkMYfDqAM_n',
                    'conservation_status_id' => '8',
                    'activity_time_id' => '2',
                    'diet_type_id' => '2',
                    'category_id' => '19',
                    'population_trending_id' => '4',
                ],
                [
                    'animal_name' => 'Chuột Chũi Mũi Sao',
                    'animal_scientific_name' => 'Condylura cristata',
                    'animal_description' => 'Chuột chũi mũi sao ( Condylura cristata ) là một loài chuột chũi nhỏ được tìm thấy ở những vùng đất thấp, ẩm ướt ở phía bắc Bắc Mỹ. Đây là loài duy nhất trong bộ lạc có cơ quan cảm ứng với hơn 25.000 phút thụ thể cảm giác, được gọi là cơ quan Eimer, mà loài chuột chũi này dùng để cảm nhận đường đi. Với sự trợ giúp của các cơ quan Eimer, nó có thể ở vị trí hoàn hảo để phát hiện các rung động của sóng địa chấn.',
                    'appearance_description' => 'Chuột chũi mũi sao là một loài động vật có vú rất đặc biệt, với bộ lông đen và bàn chân trước rộng có móng vuốt được thiết kế để đào bới. Lòng bàn chân màu hồng và đen của chúng hướng ra ngoài. Đuôi của chúng dài và nhiều lông. Mõm mà chúng được đặt tên có 11 cặp xúc tu nhỏ màu hồng trên đầu, xòe ra như một ngôi sao. Mũi có đường kính khoảng 1 cm (0,4 in) với các cơ quan Eimer phân bố trên 22 phần phụ. Vì chuột chũi mũi sao về mặt chức năng là mù, nên mõm từ lâu đã bị nghi ngờ là được sử dụng để phát hiện hoạt động điện ở động vật săn mồi, mặc dù rất ít, nếu có, hỗ trợ thực nghiệm được tìm thấy cho giả thuyết này. Ngôi sao mũi và hàm răng của loài này dường như chủ yếu thích nghi để khai thác con mồi cực nhỏ.',
                    'geography_description' =>'Chuột chũi mũi sao là loài bản địa của miền đông Bắc Mỹ (đông bắc Hoa Kỳ và đông nam Canada). Phạm vi phân bố của loài này trải dài từ Đại Tây Dương về phía tây đến Bắc Dakota và Manitoba và về phía nam đến Virginia và Ohio. Loài này cũng xuất hiện trên bờ biển Đại Tây Dương về phía nam đến Georgia và khắp dãy núi Appalachian. Loài này được tìm thấy ở nhiều môi trường sống có đất ẩm. Những loài động vật này thích những khu vực thoát nước kém, chẳng hạn như rừng lá kim và rừng rụng lá, đồng cỏ ẩm ướt, bãi đất trống, đầm lầy và đất than bùn. Chúng cũng sẽ sống ở bờ suối, hồ và ao, và sẽ mạo hiểm vào đó để kiếm thức ăn. Mặc dù thích những nơi ẩm ướt, những loài chuột chũi này đã được nhìn thấy ở những đồng cỏ khô cách mặt nước tới 400 m (0,25 dặm).',
                    'habit_lifestyle_description' => 'Chuột chũi mũi sao là loài động vật hoạt động vào ban ngày và hoạt động quanh năm. Chúng thích những khu vực ẩm ướt và đào hang qua các khu vực đầm lầy, đào hệ thống đường hầm nông dưới lòng đất, cũng như đường hầm sâu hơn. Tổ được xây dựng trên một khu vực cao hơn và khô hơn. Loài này bán thủy sinh và đôi khi đường hầm của chúng mở trực tiếp xuống nước. Chúng có thể bơi tốt và lặn trong vài giây, đôi khi ở dưới nước hơn 30 giây. Vào mùa đông, chuột chũi mũi sao săn mồi nhiều hơn trong nước vì mặt đất ẩm ướt có khả năng bị đóng băng và chúng thậm chí sẽ bơi dưới băng. Nếu chúng lên mặt đất để tìm kiếm thức ăn, thì thường là vào ban đêm. Người ta biết rất ít về cách chúng giao tiếp với nhau. Chuột chũi mũi sao non phát ra tiếng động the thé và con trưởng thành phát ra tiếng thở khò khè.',
                    'diet_nutrition_description' => 'Chuột chũi mũi sao là loài ăn thịt (ăn giun), chúng chủ yếu ăn động vật không xương sống nhưng đôi khi cũng ăn côn trùng trên cạn, động vật thân mềm, động vật giáp xác sống dưới nước và cá nhỏ.',
                    'mating_habit_description' => 'Chuột chũi mũi sao có vẻ là loài chung thủy theo cặp, với các cặp ở lại với nhau trong một mùa sinh sản. Con đực và con cái có vẻ ghép đôi vào mùa thu và ở cùng nhau trong suốt mùa giao phối, tức là vào tháng 3 và tháng 4. Thời gian mang thai kéo dài khoảng 45 ngày, với con non được sinh ra vào cuối tháng 4 cho đến giữa tháng 6. Một con cái sinh một lứa mỗi năm từ 2 đến 7 con non, với 5 là kích thước lứa điển hình. Con non không có lông khi mới sinh. Mắt, tai và ngôi sao của chúng hoạt động sau khoảng 2 tuần. Chúng độc lập khi được 30 ngày tuổi và trưởng thành về mặt sinh sản khi được 10 tháng tuổi.',
                    'mating_behavior' => 'Đơn phối ngẫu',
                    'reproduction_season' => 'Tháng 3-tháng 4',
                    'pregnancy_duration' => '45 ngày',
                    'baby_carrying' => '2-7 con',
                    'independent_age' => '30 ngày',
                    'population_threat' => 'Không có mối đe dọa lớn nào đối với loài chuột chũi mũi sao. Tuy nhiên, vì chúng phụ thuộc vào đất ngập nước để sinh tồn nên việc phá hủy liên tục các khu vực này để làm nơi cư trú cho quần thể người đang mở rộng có thể ảnh hưởng đến loài này trong tương lai.',
                    'population_number' => 'Theo IUCN, loài chuột chũi mũi sao phổ biến và phân bố rộng rãi trong phạm vi của nó nhưng không có ước tính tổng thể về quần thể. Hiện tại, loài này được phân loại là loài ít quan tâm (LC) và số lượng của chúng hiện nay vẫn ổn định.',
                    'ecological_niche' => 'Chuột chũi mũi sao có vai trò quan trọng trong nhiều hệ sinh thái đất ngập nước, cung cấp thức ăn cho một số loài ăn thịt và tiêu thụ nhiều động vật không xương sống dưới nước. Trong quá trình đào hang qua đất ẩm, nó cung cấp khí cho rễ cây, nếu không thì rễ cây có thể bị mắc kẹt trong đất thiếu oxy.',
                    'fun_fact' => 'Các xúc tu của loài chuột chũi di chuyển cực kỳ nhanh và có thể chạm tới 12 vật thể mỗi giây, người ta cho rằng chúng có thể phát hiện ra các trường điện khi con vật di chuyển về phía trước.
Chuột chũi mũi sao ngửi khi ở dưới nước bằng cách thở ra các bong bóng khí vào các vật và sau đó hít chúng vào để ngửi mùi mà chúng đã giữ lại.
Mũi của loài chuột chũi mũi sao rất lý tưởng để phát hiện động đất.
Bộ lông của loài chuột chũi mũi sao giúp chống lại nước.
Sách Kỷ lục Guinness thế giới liệt kê loài này vào danh sách những loài săn mồi nhanh nhất.
Loài này săn mồi và bắt con mồi nhanh đến mức con người gần như không thể theo dõi được',
                    'top_speed' => '8',
                    'animal_length' => '15-20',
                    'animal_weight' => '0.3-0.75',
                    'animal_swing' => '',
                    'population_size' => 'KHÔNG XÁC ĐỊNH',
                    'avg_lifespan' => '2-4',
                    'animal_sound' => 'star_nosed_mole.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/SZ7X2mrUj6o?si=ezlmlGZ2XBOsuKXd',
                    'conservation_status_id' => '1',
                    'activity_time_id' => '2',
                    'diet_type_id' => '5',
                    'category_id' => '56',
                    'population_trending_id' => '3',
                ],
            ]
        );
        DB::table('image')->insert(
            [
                [
                    'image_name' => 'lion.jpg',
                    'detail_id' => '1'
                ],
                [
                    'image_name' => 'lion1.jpg',
                    'detail_id' => '1'
                ],
                [
                    'image_name' => 'lion2.jpg',
                    'detail_id' => '1'
                ],
                [
                    'image_name' => 'lion3.jpg',
                    'detail_id' => '1'
                ],
                [
                    'image_name' => 'lion4.jpg',
                    'detail_id' => '1'
                ],
                [
                    'image_name' => 'cheetah.jpg',
                    'detail_id' => '2'
                ],
                [
                    'image_name' => 'cheetah1.jpg',
                    'detail_id' => '2'
                ],
                [
                    'image_name' => 'cheetah2.jpg',
                    'detail_id' => '2'
                ],
                [
                    'image_name' => 'cheetah3.jpg',
                    'detail_id' => '2'
                ],
                [
                    'image_name' => 'cheetah4.jpg',
                    'detail_id' => '2'
                ],
                [
                    'image_name' => 'crocodile.jpg',
                    'detail_id' => '3'
                ],
                [
                    'image_name' => 'crocodile1.jpg',
                    'detail_id' => '3'
                ],
                [
                    'image_name' => 'crocodile2.jpg',
                    'detail_id' => '3'
                ],
                [
                    'image_name' => 'crocodile3.jpg',
                    'detail_id' => '3'
                ],
                [
                    'image_name' => 'crocodile4.jpg',
                    'detail_id' => '3'
                ],
                [
                    'image_name' => 'eagle.jpg',
                    'detail_id' => '4'
                ],
                [
                    'image_name' => 'eagle1.jpg',
                    'detail_id' => '4'
                ],
                [
                    'image_name' => 'eagle2.jpg',
                    'detail_id' => '4'
                ],
                [
                    'image_name' => 'eagle3.jpg',
                    'detail_id' => '4'
                ],
                [
                    'image_name' => 'eagle4.jpg',
                    'detail_id' => '4'
                ],
                [
                    'image_name' => 'african_golden_wolf.jpg',
                    'detail_id' => '5'
                ],
                [
                    'image_name' => 'african_golden_wolf1.jpg',
                    'detail_id' => '5'
                ],
                [
                    'image_name' => 'african_golden_wolf2.jpg',
                    'detail_id' => '5'
                ],
                [
                    'image_name' => 'african_golden_wolf3.jpg',
                    'detail_id' => '5'
                ],
                [
                    'image_name' => 'african_golden_wolf4.jpg',
                    'detail_id' => '5'
                ],
                [
                    'image_name' => 'dusky_dolphin.jpg',
                    'detail_id' => '6'
                ],
                [
                    'image_name' => 'dusky_dolphin1.jpg',
                    'detail_id' => '6'
                ],
                [
                    'image_name' => 'dusky_dolphin2.jpg',
                    'detail_id' => '6'
                ],
                [
                    'image_name' => 'dusky_dolphin3.jpg',
                    'detail_id' => '6'
                ],
                [
                    'image_name' => 'dusky_dolphin4.jpg',
                    'detail_id' => '6'
                ],
                [
                    'image_name' => 'killer_whale.jpg',
                    'detail_id' => '7'
                ],
                [
                    'image_name' => 'killer_whale1.jpg',
                    'detail_id' => '7'
                ],
                [
                    'image_name' => 'killer_whale2.jpg',
                    'detail_id' => '7'
                ],
                [
                    'image_name' => 'killer_whale3.jpg',
                    'detail_id' => '7'
                ],
                [
                    'image_name' => 'killer_whale4.jpg',
                    'detail_id' => '7'
                ],
                [
                    'image_name' => 'asian_elephant.jpg',
                    'detail_id' => '8'
                ],
                [
                    'image_name' => 'asian_elephant1.jpg',
                    'detail_id' => '8'
                ],
                [
                    'image_name' => 'asian_elephant2.jpg',
                    'detail_id' => '8'
                ],
                [
                    'image_name' => 'asian_elephant3.jpg',
                    'detail_id' => '8'
                ],
                [
                    'image_name' => 'asian_elephant4.jpg',
                    'detail_id' => '8'
                ],
                [
                    'image_name' => 'polar_bear.jpg',
                    'detail_id' => '9'
                ],
                [
                    'image_name' => 'polar_bear1.jpg',
                    'detail_id' => '9'
                ],
                [
                    'image_name' => 'polar_bear2.jpg',
                    'detail_id' => '9'
                ],
                [
                    'image_name' => 'polar_bear3.jpg',
                    'detail_id' => '9'
                ],
                [
                    'image_name' => 'polar_bear4.jpg',
                    'detail_id' => '9'
                ],
                [
                    'image_name' => 'red_kangaroo.jpg',
                    'detail_id' => '10'
                ],
                [
                    'image_name' => 'red_kangaroo1.jpg',
                    'detail_id' => '10'
                ],
                [
                    'image_name' => 'red_kangaroo2.jpg',
                    'detail_id' => '10'
                ],
                [
                    'image_name' => 'red_kangaroo3.jpg',
                    'detail_id' => '10'
                ],
                [
                    'image_name' => 'red_kangaroo4.jpg',
                    'detail_id' => '10'
                ],
                [
                    'image_name' => 'rhinoceros_ratsnake.jpg',
                    'detail_id' => '11'
                ],
                [
                    'image_name' => 'rhinoceros_ratsnake1.jpg',
                    'detail_id' => '11'
                ],
                [
                    'image_name' => 'rhinoceros_ratsnake2.jpg',
                    'detail_id' => '11'
                ],
                [
                    'image_name' => 'rhinoceros_ratsnake3.jpg',
                    'detail_id' => '11'
                ],
                [
                    'image_name' => 'rhinoceros_ratsnake4.jpg',
                    'detail_id' => '11'
                ],
                [
                    'image_name' => 'koala.jpg',
                    'detail_id' => '12'
                ],
                [
                    'image_name' => 'koala1.jpg',
                    'detail_id' => '12'
                ],
                [
                    'image_name' => 'koala2.jpg',
                    'detail_id' => '12'
                ],
                [
                    'image_name' => 'koala3.jpg',
                    'detail_id' => '12'
                ],
                [
                    'image_name' => 'koala4.jpg',
                    'detail_id' => '12'
                ],
                [
                    'image_name' => 'emperor_penguin.jpg',
                    'detail_id' => '13'
                ],
                [
                    'image_name' => 'emperor_penguin1.jpg',
                    'detail_id' => '13'
                ],
                [
                    'image_name' => 'emperor_penguin2.jpg',
                    'detail_id' => '13'
                ],
                [
                    'image_name' => 'emperor_penguin3.jpg',
                    'detail_id' => '13'
                ],
                [
                    'image_name' => 'emperor_penguin4.jpg',
                    'detail_id' => '13'
                ],
                [
                    'image_name' => 'steller_sealion.jpg',
                    'detail_id' => '14'
                ],
                [
                    'image_name' => 'steller_sealion1.jpg',
                    'detail_id' => '14'
                ],
                [
                    'image_name' => 'steller_sealion2.jpg',
                    'detail_id' => '14'
                ],
                [
                    'image_name' => 'steller_sealion3.jpg',
                    'detail_id' => '14'
                ],
                [
                    'image_name' => 'steller_sealion4.jpg',
                    'detail_id' => '14'
                ],
                [
                    'image_name' => 'platypus.jpg',
                    'detail_id' => '15'
                ],
                [
                    'image_name' => 'platypus1.jpg',
                    'detail_id' => '15'
                ],
                [
                    'image_name' => 'platypus2.jpg',
                    'detail_id' => '15'
                ],
                [
                    'image_name' => 'platypus3.jpg',
                    'detail_id' => '15'
                ],
                [
                    'image_name' => 'platypus4.jpg',
                    'detail_id' => '15'
                ],
                [
                    'image_name' => 'golden_snub_nosed_monkey.jpg',
                    'detail_id' => '16'
                ],
                [
                    'image_name' => 'golden_snub_nosed_monkey1.jpg',
                    'detail_id' => '16'
                ],
                [
                    'image_name' => 'golden_snub_nosed_monkey2.jpg',
                    'detail_id' => '16'
                ],
                [
                    'image_name' => 'golden_snub_nosed_monkey3.jpg',
                    'detail_id' => '16'
                ],
                [
                    'image_name' => 'golden_snub_nosed_monkey4.jpg',
                    'detail_id' => '16'
                ],

                [
                    'image_name' => 'capybara.jpg',
                    'detail_id' => '17'
                ],
                [
                    'image_name' => 'capybara1.jpg',
                    'detail_id' => '17'
                ],
                [
                    'image_name' => 'capybara2.jpg',
                    'detail_id' => '17'
                ],
                [
                    'image_name' => 'capybara3.jpg',
                    'detail_id' => '17'
                ],
                [
                    'image_name' => 'capybara4.jpg',
                    'detail_id' => '17'
                ],
                [
                    'image_name' => 'alligator_ turtle.jpg',
                    'detail_id' => '18'
                ],
                [
                    'image_name' => 'alligator_ turtle1.jpg',
                    'detail_id' => '18'
                ],
                [
                    'image_name' => 'alligator_ turtle2.jpg',
                    'detail_id' => '18'
                ],
                [
                    'image_name' => 'alligator_ turtle3.jpg',
                    'detail_id' => '18'
                ],
                [
                    'image_name' => 'alligator_ turtle4.jpg',
                    'detail_id' => '18'
                ],
                [
                    'image_name' => 'saharan_horned_viper.jpg',
                    'detail_id' => '19'
                ],
                [
                    'image_name' => 'saharan_horned_viper1.jpg',
                    'detail_id' => '19'
                ],
                [
                    'image_name' => 'saharan_horned_viper2.jpg',
                    'detail_id' => '19'
                ],
                [
                    'image_name' => 'saharan_horned_viper3.jpg',
                    'detail_id' => '19'
                ],
                [
                    'image_name' => 'saharan_horned_viper4.jpg',
                    'detail_id' => '19'
                ],
                [
                    'image_name' => 'star_nosed_mole.jpg',
                    'detail_id' => '20'
                ],
                [
                    'image_name' => 'star_nosed_mole1.jpg',
                    'detail_id' => '20'
                ],
                [
                    'image_name' => 'star_nosed_mole2.jpg',
                    'detail_id' => '20'
                ],
                [
                    'image_name' => 'star_nosed_mole3.jpg',
                    'detail_id' => '20'
                ],
                [
                    'image_name' => 'star_nosed_mole4.jpg',
                    'detail_id' => '20'
                ],
            ]
        );
        DB::table('animal_between_area')->insert(
            [
                [
                    'animal_detail_id' => '1',
                    'area_id' => '2'
                ],
                [
                    'animal_detail_id' => '1',
                    'area_id' => '5'
                ],
                [
                    'animal_detail_id' => '2',
                    'area_id' => '2'
                ],
                [
                    'animal_detail_id' => '2',
                    'area_id' => '5'
                ],
                [
                    'animal_detail_id' => '3',
                    'area_id' => '5'
                ],
                [
                    'animal_detail_id' => '4',
                    'area_id' => '3'
                ],
                [
                    'animal_detail_id' => '4',
                    'area_id' => '1'
                ],
                [
                    'animal_detail_id' => '4',
                    'area_id' => '2'
                ],
                [
                    'animal_detail_id' => '5',
                    'area_id' => '5'
                ],
                [
                    'animal_detail_id' => '6',
                    'area_id' => '3'
                ]
                ,[
                    'animal_detail_id' => '6',
                    'area_id' => '4'
                ]
                ,[
                    'animal_detail_id' => '6',
                    'area_id' => '5'
                ],
                [
                    'animal_detail_id' => '6',
                    'area_id' => '1'
                ],
                [
                    'animal_detail_id' => '7',
                    'area_id' => '2'
                ],
                [
                    'animal_detail_id' => '7',
                    'area_id' => '3'
                ],
                [
                    'animal_detail_id' => '7',
                    'area_id' => '4'
                ],
                [
                    'animal_detail_id' => '7',
                    'area_id' => '5'
                ],
                [
                    'animal_detail_id' => '7',
                    'area_id' => '6'
                ],
                [
                    'animal_detail_id' => '8',
                    'area_id' => '2'
                ],
                [
                    'animal_detail_id' => '9',
                    'area_id' => '1'
                ],
                [
                    'animal_detail_id' => '9',
                    'area_id' => '2'
                ],
                [
                    'animal_detail_id' => '9',
                    'area_id' => '3'
                ],
                [
                    'animal_detail_id' => '10',
                    'area_id' => '6'
                ],
                [
                    'animal_detail_id' => '11',
                    'area_id' => '2'
                ],
                [
                    'animal_detail_id' => '12',
                    'area_id' => '6'
                ],
                [
                    'animal_detail_id' => '13',
                    'area_id' => '4'
                ],
                [
                    'animal_detail_id' => '14',
                    'area_id' => '2'
                ],
                [
                    'animal_detail_id' => '14',
                    'area_id' => '3'
                ],
                [
                    'animal_detail_id' => '15',
                    'area_id' => '6'
                ],
                [
                    'animal_detail_id' => '16',
                    'area_id' => '2'
                ],
                [
                    'animal_detail_id' => '17',
                    'area_id' => '3'
                ],
                [
                    'animal_detail_id' => '18',
                    'area_id' => '3'
                ],
                [
                    'animal_detail_id' => '19',
                    'area_id' => '2'
                ],
                [
                    'animal_detail_id' => '19',
                    'area_id' => '5'
                ],
                [
                    'animal_detail_id' => '20',
                    'area_id' => '3'
                ],
            ]
        );
        DB::table('animal_between_nation')->insert(
            [
                ['animal_detail_id' => '1', 'nation_id' => '5'],
                ['animal_detail_id' => '1', 'nation_id' => '19'],
                ['animal_detail_id' => '1', 'nation_id' => '23'],
                ['animal_detail_id' => '1', 'nation_id' => '27'],
                ['animal_detail_id' => '1', 'nation_id' => '31'],
                ['animal_detail_id' => '1', 'nation_id' => '33'],
                ['animal_detail_id' => '1', 'nation_id' => '56'],
                ['animal_detail_id' => '1', 'nation_id' => '75'],
                ['animal_detail_id' => '1', 'nation_id' => '86'],
                ['animal_detail_id' => '1', 'nation_id' => '101'],
                ['animal_detail_id' => '1', 'nation_id' => '116'],
                ['animal_detail_id' => '1', 'nation_id' => '118'],
                ['animal_detail_id' => '1', 'nation_id' => '124'],
                ['animal_detail_id' => '1', 'nation_id' => '150'],
                ['animal_detail_id' => '1', 'nation_id' => '158'],
                ['animal_detail_id' => '1', 'nation_id' => '159'],
                ['animal_detail_id' => '1', 'nation_id' => '160'],
                ['animal_detail_id' => '1', 'nation_id' => '163'],
                ['animal_detail_id' => '1', 'nation_id' => '55'],
                ['animal_detail_id' => '1', 'nation_id' => '170'],
                ['animal_detail_id' => '1', 'nation_id' => '180'],
                ['animal_detail_id' => '1', 'nation_id' => '192'],
                ['animal_detail_id' => '1', 'nation_id' => '193'],
                ['animal_detail_id' => '1', 'nation_id' => '64'],
                ['animal_detail_id' => '2', 'nation_id' => '3'],
                ['animal_detail_id' => '2', 'nation_id' => '5'],
                ['animal_detail_id' => '2', 'nation_id' => '19'],
                ['animal_detail_id' => '2', 'nation_id' => '23'],
                ['animal_detail_id' => '2', 'nation_id' => '27'],
                ['animal_detail_id' => '2', 'nation_id' => '33'],
                ['animal_detail_id' => '2', 'nation_id' => '34'],
                ['animal_detail_id' => '2', 'nation_id' => '77'],
                ['animal_detail_id' => '2', 'nation_id' => '86'],
                ['animal_detail_id' => '2', 'nation_id' => '104'],
                ['animal_detail_id' => '2', 'nation_id' => '116'],
                ['animal_detail_id' => '2', 'nation_id' => '124'],
                ['animal_detail_id' => '2', 'nation_id' => '159'],
                ['animal_detail_id' => '2', 'nation_id' => '160'],
                ['animal_detail_id' => '2', 'nation_id' => '170'],
                ['animal_detail_id' => '2', 'nation_id' => '180'],
                ['animal_detail_id' => '2', 'nation_id' => '192'],
                ['animal_detail_id' => '2', 'nation_id' => '193'],
                ['animal_detail_id' => '2', 'nation_id' => '53'],
                ['animal_detail_id' => '2', 'nation_id' => '55'],
                ['animal_detail_id' => '3', 'nation_id' => '5'],
                ['animal_detail_id' => '3', 'nation_id' => '19'],
                ['animal_detail_id' => '3', 'nation_id' => '23'],
                ['animal_detail_id' => '3', 'nation_id' => '27'],
                ['animal_detail_id' => '3', 'nation_id' => '28'],
                ['animal_detail_id' => '3', 'nation_id' => '31'],
                ['animal_detail_id' => '3', 'nation_id' => '33'],
                ['animal_detail_id' => '3', 'nation_id' => '24'],
                ['animal_detail_id' => '3', 'nation_id' => '39'],
                ['animal_detail_id' => '3', 'nation_id' => '50'],
                ['animal_detail_id' => '3', 'nation_id' => '52'],
                ['animal_detail_id' => '3', 'nation_id' => '53'],
                ['animal_detail_id' => '3', 'nation_id' => '56'],
                ['animal_detail_id' => '3', 'nation_id' => '60'],
                ['animal_detail_id' => '3', 'nation_id' => '61'],
                ['animal_detail_id' => '3', 'nation_id' => '64'],
                ['animal_detail_id' => '3', 'nation_id' => '68'],
                ['animal_detail_id' => '3', 'nation_id' => '69'],
                ['animal_detail_id' => '3', 'nation_id' => '86'],
                ['animal_detail_id' => '3', 'nation_id' => '95'],
                ['animal_detail_id' => '3', 'nation_id' => '100'],
                ['animal_detail_id' => '3', 'nation_id' => '101'],
                ['animal_detail_id' => '3', 'nation_id' => '104'],
                ['animal_detail_id' => '3', 'nation_id' => '107'],
                ['animal_detail_id' => '3', 'nation_id' => '116'],
                ['animal_detail_id' => '3', 'nation_id' => '118'],
                ['animal_detail_id' => '3', 'nation_id' => '124'],
                ['animal_detail_id' => '3', 'nation_id' => '125'],
                ['animal_detail_id' => '3', 'nation_id' => '142'],
                ['animal_detail_id' => '3', 'nation_id' => '150'],
                ['animal_detail_id' => '3', 'nation_id' => '153'],
                ['animal_detail_id' => '3', 'nation_id' => '158'],
                ['animal_detail_id' => '3', 'nation_id' => '159'],
                ['animal_detail_id' => '3', 'nation_id' => '160'],
                ['animal_detail_id' => '3', 'nation_id' => '155'],
                ['animal_detail_id' => '3', 'nation_id' => '170'],
                ['animal_detail_id' => '3', 'nation_id' => '173'],
                ['animal_detail_id' => '3', 'nation_id' => '180'],
                ['animal_detail_id' => '3', 'nation_id' => '192'],
                ['animal_detail_id' => '3', 'nation_id' => '193'],
                ['animal_detail_id' => '4', 'nation_id' => '32'],
                ['animal_detail_id' => '4', 'nation_id' => '109'],
                ['animal_detail_id' => '4', 'nation_id' => '184'],
                ['animal_detail_id' => '4', 'nation_id' => '18'],
                ['animal_detail_id' => '4', 'nation_id' => '79'],
                ['animal_detail_id' => '4', 'nation_id' => '141'],
                ['animal_detail_id' => '5', 'nation_id' => '3'],
                ['animal_detail_id' => '5', 'nation_id' => '27'],
                ['animal_detail_id' => '5', 'nation_id' => '31'],
                ['animal_detail_id' => '5', 'nation_id' => '33'],
                ['animal_detail_id' => '5', 'nation_id' => '34'],
                ['animal_detail_id' => '5', 'nation_id' => '46'],
                ['animal_detail_id' => '5', 'nation_id' => '53'],
                ['animal_detail_id' => '5', 'nation_id' => '56'],
                ['animal_detail_id' => '5', 'nation_id' => '68'],
                ['animal_detail_id' => '5', 'nation_id' => '86'],
                ['animal_detail_id' => '5', 'nation_id' => '96'],
                ['animal_detail_id' => '5', 'nation_id' => '107'],
                ['animal_detail_id' => '5', 'nation_id' => '115'],
                ['animal_detail_id' => '5', 'nation_id' => '124'],
                ['animal_detail_id' => '5', 'nation_id' => '125'],
                ['animal_detail_id' => '5', 'nation_id' => '150'],
                ['animal_detail_id' => '5', 'nation_id' => '158'],
                ['animal_detail_id' => '5', 'nation_id' => '160'],
                ['animal_detail_id' => '5', 'nation_id' => '163'],
                ['animal_detail_id' => '5', 'nation_id' => '170'],
                ['animal_detail_id' => '5', 'nation_id' => '176'],
                ['animal_detail_id' => '5', 'nation_id' => '191'],
                ['animal_detail_id' => '6', 'nation_id' => '7'],
                ['animal_detail_id' => '6', 'nation_id' => '9'],
                ['animal_detail_id' => '6', 'nation_id' => '35'],
                ['animal_detail_id' => '6', 'nation_id' => '118'],
                ['animal_detail_id' => '6', 'nation_id' => '132'],
                ['animal_detail_id' => '6', 'nation_id' => '135'],
                ['animal_detail_id' => '6', 'nation_id' => '159'],
                ['animal_detail_id' => '7', 'nation_id' => '3'],
                ['animal_detail_id' => '7', 'nation_id' => '6'],
                ['animal_detail_id' => '7', 'nation_id' => '7'],
                ['animal_detail_id' => '7', 'nation_id' => '9'],
                ['animal_detail_id' => '7', 'nation_id' => '12'],
                ['animal_detail_id' => '7', 'nation_id' => '14'],
                ['animal_detail_id' => '7', 'nation_id' => '15'],
                ['animal_detail_id' => '7', 'nation_id' => '18'],
                ['animal_detail_id' => '7', 'nation_id' => '19'],
                ['animal_detail_id' => '7', 'nation_id' => '24'],
                ['animal_detail_id' => '7', 'nation_id' => '25'],
                ['animal_detail_id' => '7', 'nation_id' => '30'],
                ['animal_detail_id' => '7', 'nation_id' => '31'],
                ['animal_detail_id' => '7', 'nation_id' => '32'],
                ['animal_detail_id' => '7', 'nation_id' => '35'],
                ['animal_detail_id' => '7', 'nation_id' => '36'],
                ['animal_detail_id' => '7', 'nation_id' => '37'],
                ['animal_detail_id' => '7', 'nation_id' => '38'],
                ['animal_detail_id' => '7', 'nation_id' => '39'],
                ['animal_detail_id' => '7', 'nation_id' => '40'],
                ['animal_detail_id' => '7', 'nation_id' => '42'],
                ['animal_detail_id' => '7', 'nation_id' => '45'],
                ['animal_detail_id' => '7', 'nation_id' => '46'],
                ['animal_detail_id' => '7', 'nation_id' => '47'],
                ['animal_detail_id' => '7', 'nation_id' => '48'],
                ['animal_detail_id' => '7', 'nation_id' => '49'],
                ['animal_detail_id' => '7', 'nation_id' => '51'],
                ['animal_detail_id' => '7', 'nation_id' => '60'],
                ['animal_detail_id' => '7', 'nation_id' => '52'],
                ['animal_detail_id' => '7', 'nation_id' => '57'],
                ['animal_detail_id' => '7', 'nation_id' => '59'],
                ['animal_detail_id' => '7', 'nation_id' => '61'],
                ['animal_detail_id' => '7', 'nation_id' => '64'],
                ['animal_detail_id' => '7', 'nation_id' => '66'],
                ['animal_detail_id' => '7', 'nation_id' => '67'],
                ['animal_detail_id' => '7', 'nation_id' => '68'],
                ['animal_detail_id' => '7', 'nation_id' => '69'],
                ['animal_detail_id' => '7', 'nation_id' => '70'],
                ['animal_detail_id' => '7', 'nation_id' => '72'],
                ['animal_detail_id' => '7', 'nation_id' => '75'],
                ['animal_detail_id' => '7', 'nation_id' => '76'],
                ['animal_detail_id' => '7', 'nation_id' => '77'],
                ['animal_detail_id' => '7', 'nation_id' => '79'],
                ['animal_detail_id' => '7', 'nation_id' => '80'],
                ['animal_detail_id' => '7', 'nation_id' => '81'],
                ['animal_detail_id' => '7', 'nation_id' => '82'],
                ['animal_detail_id' => '7', 'nation_id' => '83'],
                ['animal_detail_id' => '7', 'nation_id' => '86'],
                ['animal_detail_id' => '8', 'nation_id' => '14'],
                ['animal_detail_id' => '8', 'nation_id' => '20'],
                ['animal_detail_id' => '8', 'nation_id' => '30'],
                ['animal_detail_id' => '8', 'nation_id' => '36'],
                ['animal_detail_id' => '8', 'nation_id' => '76'],
                ['animal_detail_id' => '8', 'nation_id' => '75'],
                ['animal_detail_id' => '8', 'nation_id' => '91'],
                ['animal_detail_id' => '8', 'nation_id' => '102'],
                ['animal_detail_id' => '8', 'nation_id' => '117'],
                ['animal_detail_id' => '8', 'nation_id' => '120'],
                ['animal_detail_id' => '8', 'nation_id' => '162'],
                ['animal_detail_id' => '8', 'nation_id' => '171'],
                ['animal_detail_id' => '8', 'nation_id' => '189'],
                ['animal_detail_id' => '9', 'nation_id' => '32'],
                ['animal_detail_id' => '9', 'nation_id' => '128'],
                ['animal_detail_id' => '9', 'nation_id' => '141'],
                ['animal_detail_id' => '9', 'nation_id' => '184'],
                ['animal_detail_id' => '10', 'nation_id' => '9'],
                ['animal_detail_id' => '11', 'nation_id' => '189'],
                ['animal_detail_id' => '11', 'nation_id' => '36'],
                ['animal_detail_id' => '12', 'nation_id' => '9'],
                ['animal_detail_id' => '14', 'nation_id' => '32'],
                ['animal_detail_id' => '14', 'nation_id' => '83'],
                ['animal_detail_id' => '14', 'nation_id' => '141'],
                ['animal_detail_id' => '14', 'nation_id' => '184'],
                ['animal_detail_id' => '14', 'nation_id' => '36'],
                ['animal_detail_id' => '14', 'nation_id' => '126'],
                ['animal_detail_id' => '15', 'nation_id' => '9'],
                ['animal_detail_id' => '16', 'nation_id' => '36'],
                ['animal_detail_id' => '17', 'nation_id' => '7'],
                ['animal_detail_id' => '17', 'nation_id' => '21'],
                ['animal_detail_id' => '17', 'nation_id' => '24'],
                ['animal_detail_id' => '17', 'nation_id' => '37'],
                ['animal_detail_id' => '17', 'nation_id' => '49'],
                ['animal_detail_id' => '17', 'nation_id' => '70'],
                ['animal_detail_id' => '17', 'nation_id' => '134'],
                ['animal_detail_id' => '17', 'nation_id' => '135'],
                ['animal_detail_id' => '17', 'nation_id' => '185'],
                ['animal_detail_id' => '17', 'nation_id' => '188'],
                ['animal_detail_id' => '18', 'nation_id' => '184'],
                ['animal_detail_id' => '19', 'nation_id' => '115'],
                ['animal_detail_id' => '19', 'nation_id' => '107'],
                ['animal_detail_id' => '19', 'nation_id' => '104'],
                ['animal_detail_id' => '19', 'nation_id' => '3'],
                ['animal_detail_id' => '19', 'nation_id' => '176'],
                ['animal_detail_id' => '19', 'nation_id' => '124'],
                ['animal_detail_id' => '19', 'nation_id' => '96'],
                ['animal_detail_id' => '19', 'nation_id' => '34'],
                ['animal_detail_id' => '19', 'nation_id' => '50'],
                ['animal_detail_id' => '19', 'nation_id' => '163'],
                ['animal_detail_id' => '19', 'nation_id' => '56'],
                ['animal_detail_id' => '19', 'nation_id' => '158'],
                ['animal_detail_id' => '19', 'nation_id' => '80'],
                ['animal_detail_id' => '19', 'nation_id' => '190'],
                ['animal_detail_id' => '19', 'nation_id' => '89'],
                ['animal_detail_id' => '19', 'nation_id' => '149'],
                ['animal_detail_id' => '19', 'nation_id' => '139'],
                ['animal_detail_id' => '20', 'nation_id' => '32'],
                ['animal_detail_id' => '20', 'nation_id' => '184'],


            ]
        );
        DB::table('animal_between_biome')->insert(
            [
                ['animal_detail_id' => '4', 'biome_id' => '1'],
                ['animal_detail_id' => '4', 'biome_id' => '3'],
                ['animal_detail_id' => '4', 'biome_id' => '5'],
                ['animal_detail_id' => '4', 'biome_id' => '9'],
                ['animal_detail_id' => '4', 'biome_id' => '26'],
                ['animal_detail_id' => '4', 'biome_id' => '4'],
                ['animal_detail_id' => '4', 'biome_id' => '18'],
                ['animal_detail_id' => '4', 'biome_id' => '10'],
                ['animal_detail_id' => '3', 'biome_id' => '1'],
                ['animal_detail_id' => '3', 'biome_id' => '3'],
                ['animal_detail_id' => '3', 'biome_id' => '5'],
                ['animal_detail_id' => '3', 'biome_id' => '21'],
                ['animal_detail_id' => '3', 'biome_id' => '4'],
                ['animal_detail_id' => '3', 'biome_id' => '10'],
                ['animal_detail_id' => '3', 'biome_id' => '20'],
                ['animal_detail_id' => '3', 'biome_id' => '22'],
                ['animal_detail_id' => '3', 'biome_id' => '25'],
                ['animal_detail_id' => '2', 'biome_id' => '8'],
                ['animal_detail_id' => '2', 'biome_id' => '26'],
                ['animal_detail_id' => '2', 'biome_id' => '18'],
                ['animal_detail_id' => '1', 'biome_id' => '26'],
                ['animal_detail_id' => '1', 'biome_id' => '9'],
                ['animal_detail_id' => '1', 'biome_id' => '18'],
                ['animal_detail_id' => '1', 'biome_id' => '8'],
                ['animal_detail_id' => '5', 'biome_id' => '26'],
                ['animal_detail_id' => '5', 'biome_id' => '15'],
                ['animal_detail_id' => '5', 'biome_id' => '18'],
                ['animal_detail_id' => '5', 'biome_id' => '13'],
                ['animal_detail_id' => '5', 'biome_id' => '12'],
                ['animal_detail_id' => '5', 'biome_id' => '9'],
                ['animal_detail_id' => '5', 'biome_id' => '8'],
                ['animal_detail_id' => '5', 'biome_id' => '11'],
                ['animal_detail_id' => '6', 'biome_id' => '4'],
                ['animal_detail_id' => '6', 'biome_id' => '16'],
                ['animal_detail_id' => '6', 'biome_id' => '20'],
                ['animal_detail_id' => '7', 'biome_id' => '4'],
                ['animal_detail_id' => '7', 'biome_id' => '16'],
                ['animal_detail_id' => '7', 'biome_id' => '20'],
                ['animal_detail_id' => '8', 'biome_id' => '9'],
                ['animal_detail_id' => '8', 'biome_id' => '26'],
                ['animal_detail_id' => '8', 'biome_id' => '18'],
                ['animal_detail_id' => '8', 'biome_id' => '12'],
                ['animal_detail_id' => '8', 'biome_id' => '13'],
                ['animal_detail_id' => '9', 'biome_id' => '16'],
                ['animal_detail_id' => '9', 'biome_id' => '27'],
                ['animal_detail_id' => '9', 'biome_id' => '4'],
                ['animal_detail_id' => '10', 'biome_id' => '12'],
                ['animal_detail_id' => '10', 'biome_id' => '18'],
                ['animal_detail_id' => '10', 'biome_id' => '26'],
                ['animal_detail_id' => '10', 'biome_id' => '13'],
                ['animal_detail_id' => '10', 'biome_id' => '9'],
                ['animal_detail_id' => '11', 'biome_id' => '9'],
                ['animal_detail_id' => '12', 'biome_id' => '17'],
                ['animal_detail_id' => '12', 'biome_id' => '9'],
                ['animal_detail_id' => '12', 'biome_id' => '26'],
                ['animal_detail_id' => '13', 'biome_id' => '20'],
                ['animal_detail_id' => '13', 'biome_id' => '26'],
                ['animal_detail_id' => '13', 'biome_id' => '16'],
                ['animal_detail_id' => '13', 'biome_id' => '4'],
                ['animal_detail_id' => '14', 'biome_id' => '20'],
                ['animal_detail_id' => '14', 'biome_id' => '26'],
                ['animal_detail_id' => '14', 'biome_id' => '16'],
                ['animal_detail_id' => '14', 'biome_id' => '4'],
                ['animal_detail_id' => '15', 'biome_id' => '3'],
                ['animal_detail_id' => '15', 'biome_id' => '21'],
                ['animal_detail_id' => '15', 'biome_id' => '17'],
                ['animal_detail_id' => '15', 'biome_id' => '1'],
                ['animal_detail_id' => '16', 'biome_id' => '8'],
                ['animal_detail_id' => '16', 'biome_id' => '9'],
                ['animal_detail_id' => '17', 'biome_id' => '1'],
                ['animal_detail_id' => '17', 'biome_id' => '3'],
                ['animal_detail_id' => '17', 'biome_id' => '17'],
                ['animal_detail_id' => '17', 'biome_id' => '9'],
                ['animal_detail_id' => '17', 'biome_id' => '10'],
                ['animal_detail_id' => '17', 'biome_id' => '21'],
                ['animal_detail_id' => '17', 'biome_id' => '26'],
                ['animal_detail_id' => '18', 'biome_id' => '3'],
                ['animal_detail_id' => '18', 'biome_id' => '1'],
                ['animal_detail_id' => '18', 'biome_id' => '10'],
                ['animal_detail_id' => '18', 'biome_id' => '21'],
                ['animal_detail_id' => '19', 'biome_id' => '24'],
                ['animal_detail_id' => '20', 'biome_id' => '1'],
                ['animal_detail_id' => '20', 'biome_id' => '3'],
                ['animal_detail_id' => '20', 'biome_id' => '8'],
                ['animal_detail_id' => '20', 'biome_id' => '9'],
                ['animal_detail_id' => '20', 'biome_id' => '10'],
                ['animal_detail_id' => '20', 'biome_id' => '18'],
                ['animal_detail_id' => '20', 'biome_id' => '5'],
                ['animal_detail_id' => '20', 'biome_id' => '21'],

            ]
        );
        DB::table('animal_between_climate')->insert(
            [
                ['animal_detail_id' => '1', 'climate_id' => '1'],
                ['animal_detail_id' => '1', 'climate_id' => '2'],
                ['animal_detail_id' => '2', 'climate_id' => '1'],
                ['animal_detail_id' => '2', 'climate_id' => '2'],
                ['animal_detail_id' => '3', 'climate_id' => '1'],
                ['animal_detail_id' => '3', 'climate_id' => '3'],
                ['animal_detail_id' => '4', 'climate_id' => '1'],
                ['animal_detail_id' => '4', 'climate_id' => '3'],
                ['animal_detail_id' => '4', 'climate_id' => '4'],
                ['animal_detail_id' => '5', 'climate_id' => '1'],
                ['animal_detail_id' => '5', 'climate_id' => '2'],
                ['animal_detail_id' => '6', 'climate_id' => '3'],
                ['animal_detail_id' => '6', 'climate_id' => '4'],
                ['animal_detail_id' => '7', 'climate_id' => '1'],
                ['animal_detail_id' => '7', 'climate_id' => '3'],
                ['animal_detail_id' => '7', 'climate_id' => '4'],
                ['animal_detail_id' => '7', 'climate_id' => '5'],
                ['animal_detail_id' => '8', 'climate_id' => '1'],
                ['animal_detail_id' => '9', 'climate_id' => '4'],
                ['animal_detail_id' => '9', 'climate_id' => '5'],
                ['animal_detail_id' => '9', 'climate_id' => '1'],
                ['animal_detail_id' => '10', 'climate_id' => '1'],
                ['animal_detail_id' => '10', 'climate_id' => '2'],
                ['animal_detail_id' => '11', 'climate_id' => '1'],
                ['animal_detail_id' => '12', 'climate_id' => '1'],
                ['animal_detail_id' => '12', 'climate_id' => '3'],
                ['animal_detail_id' => '13', 'climate_id' => '5'],
                ['animal_detail_id' => '14', 'climate_id' => '3'],
                ['animal_detail_id' => '14', 'climate_id' => '4'],
                ['animal_detail_id' => '15', 'climate_id' => '1'],
                ['animal_detail_id' => '15', 'climate_id' => '3'],
                ['animal_detail_id' => '16', 'climate_id' => '3'],
                ['animal_detail_id' => '16', 'climate_id' => '4'],
                ['animal_detail_id' => '17', 'climate_id' => '1'],
                ['animal_detail_id' => '18', 'climate_id' => '3'],
                ['animal_detail_id' => '19', 'climate_id' => '1'],
                ['animal_detail_id' => '19', 'climate_id' => '2'],
                ['animal_detail_id' => '19', 'climate_id' => '3'],

                ['animal_detail_id' => '20', 'climate_id' => '3'],
                ['animal_detail_id' => '20', 'climate_id' => '4'],

            ]
        );
        DB::table('animal_between_color')->insert(
            [
                ['animal_detail_id' => 1, 'color_id' => 4],
                ['animal_detail_id' => 1, 'color_id' => 6],
                ['animal_detail_id' => 1, 'color_id' => 8],
                ['animal_detail_id' => 4, 'color_id' => 4],
                ['animal_detail_id' => 4, 'color_id' => 6],
                ['animal_detail_id' => 4, 'color_id' => 7],
                ['animal_detail_id' => 2, 'color_id' => 4],
                ['animal_detail_id' => 2, 'color_id' => 6],
                ['animal_detail_id' => 2, 'color_id' => 8],
                ['animal_detail_id' => 3, 'color_id' => 9],
                ['animal_detail_id' => 3, 'color_id' => 6],
                ['animal_detail_id' => 3, 'color_id' => 1],
                ['animal_detail_id' => 3, 'color_id' => 4],
                ['animal_detail_id' => 5, 'color_id' => 4],
                ['animal_detail_id' => 5, 'color_id' => 6],
                ['animal_detail_id' => 5, 'color_id' => 8],
                ['animal_detail_id' => 5, 'color_id' => 9],
                ['animal_detail_id' => 6, 'color_id' => 9],
                ['animal_detail_id' => 6, 'color_id' => 7],
                ['animal_detail_id' => 7, 'color_id' => 7],
                ['animal_detail_id' => 7, 'color_id' => 8],
                ['animal_detail_id' => 7, 'color_id' => 9],
                ['animal_detail_id' => 8, 'color_id' => 9],
                ['animal_detail_id' => 8, 'color_id' => 6],
                ['animal_detail_id' => 9, 'color_id' => 7],
                ['animal_detail_id' => 10, 'color_id' => 6],
                ['animal_detail_id' => 10, 'color_id' => 9],
                ['animal_detail_id' => 11, 'color_id' => 1],
                ['animal_detail_id' => 11, 'color_id' => 4],
                ['animal_detail_id' => 11, 'color_id' => 7],
                ['animal_detail_id' => 12, 'color_id' => 9],
                ['animal_detail_id' => 13, 'color_id' => 5],
                ['animal_detail_id' => 13, 'color_id' => 7],
                ['animal_detail_id' => 13, 'color_id' => 8],
                ['animal_detail_id' => 14, 'color_id' => 6],
                ['animal_detail_id' => 14, 'color_id' => 9],
                ['animal_detail_id' => 15, 'color_id' => 6],
                ['animal_detail_id' => 15, 'color_id' => 7],
                ['animal_detail_id' => 15, 'color_id' => 9],
                ['animal_detail_id' => 16, 'color_id' => 3],
                ['animal_detail_id' => 16, 'color_id' => 4],
                ['animal_detail_id' => 16, 'color_id' => 6],
                ['animal_detail_id' => 17, 'color_id' => 6],
                ['animal_detail_id' => 18, 'color_id' => 6],
                ['animal_detail_id' => 18, 'color_id' => 8],
                ['animal_detail_id' => 18, 'color_id' => 9],
                ['animal_detail_id' => 19, 'color_id' => 4],
                ['animal_detail_id' => 19, 'color_id' => 6],
                ['animal_detail_id' => 19, 'color_id' => 9],
                ['animal_detail_id' => 20, 'color_id' => 6],
                ['animal_detail_id' => 20, 'color_id' => 8],
            ]
        );
        DB::table('animal_between_ocean')->insert(
            [
                ['animal_detail_id' => 6, 'ocean_id' => 1],
                ['animal_detail_id' => 6, 'ocean_id' => 3],
                ['animal_detail_id' => 7, 'ocean_id' => 1],
                ['animal_detail_id' => 7, 'ocean_id' => 3],
                ['animal_detail_id' => 7, 'ocean_id' => 4],
                ['animal_detail_id' => 9, 'ocean_id' => 4],
                ['animal_detail_id' => 14, 'ocean_id' => 1],

            ]
        );

    }
}
