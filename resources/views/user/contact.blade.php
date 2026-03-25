@extends('user.main')
@section('title', 'Liên hệ')
@section('content_user')
    <!-- Contact Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-4 mb-5">
          <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="h-100 bg-light d-flex align-items-center p-5">
              <div class="btn-lg-square bg-white flex-shrink-0">
                <i class="fa fa-map-marker-alt text-primary"></i>
              </div>
              <div class="ms-4">
                <p class="mb-2">
                  <span class="text-primary me-2">#</span>Địa chỉ
                </p>
                <h5 class="mb-0">Van Hoi, Ha Noi</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="h-100 bg-light d-flex align-items-center p-5">
              <div class="btn-lg-square bg-white flex-shrink-0">
                <i class="fa fa-phone-alt text-primary"></i>
              </div>
              <div class="ms-4">
                <p class="mb-2">
                  <span class="text-primary me-2">#</span>Gọi ngay
                </p>
                <h5 class="mb-0">+ 84 88 616 515</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
            <div class="h-100 bg-light d-flex align-items-center p-5">
              <div class="btn-lg-square bg-white flex-shrink-0">
                <i class="fa fa-envelope-open text-primary"></i>
              </div>
              <div class="ms-4">
                <p class="mb-2">
                  <span class="text-primary me-2">#</span>Gửi Email
                </p>
                <h5 class="mb-0">khamphadongvat@adw.com</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <p><span class="text-primary me-2">#</span>Liên hệ với chúng tôi</p>
            <h1 class="display-5 mb-4">Bạn có bất kỳ câu hỏi nào? Vui lòng liên hệ với chúng tôi!</h1>
            <p class="mb-4">
              Nếu bạn có bất kỳ thắc mắc hoặc cần hỗ trợ, đừng ngần ngại liên hệ với chúng tôi.
              Chúng tôi luôn sẵn sàng lắng nghe và giải đáp mọi yêu cầu của bạn một cách nhanh chóng.
              Hãy điền thông tin vào biểu mẫu bên dưới và chúng tôi sẽ phản hồi lại sớm nhất có thể.
            </p>
            <form>
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control bg-light border-0"
                      id="name"
                      placeholder="Tên của bạn"
                    />
                    <label for="name">Tên của bạn</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="email"
                      class="form-control bg-light border-0"
                      id="email"
                      placeholder="Email của bạn"
                    />
                    <label for="email">Email của bạn</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control bg-light border-0"
                      id="subject"
                      placeholder="Tiêu đề"
                    />
                    <label for="subject">Tiêu đề</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea
                      class="form-control bg-light border-0"
                      placeholder="Để lại lời nhắn tại đây"
                      id="message"
                      style="height: 100px"
                    ></textarea>
                    <label for="message">Lời nhắn</label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary w-100 py-3" type="submit">
                    Gửi tin nhắn
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="h-100" style="min-height: 400px">
              <iframe
                class="rounded w-100 h-100"
                src="https://www.google.com/maps?q=Văn%20Hội,%20Hà%20Nội&output=embed"
                frameborder="0"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->
@endsection
