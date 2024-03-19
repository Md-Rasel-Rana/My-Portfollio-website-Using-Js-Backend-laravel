<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <h1 class="big big-2">Contact</h1>
          <h2 class="mb-4">Contact Me</h2>
          <p>Have a question, suggestion, or just want to chat? I'd love to hear from you! Feel free to reach out using any of the methods below:</p>
        </div>
      </div>

      <div class="row d-flex contact-info mb-5">
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-map-signs"></span>
                </div>
                <h3 class="mb-4">Address</h3>
              <p>Road: 03, House: 69, Mohammadpur, Dhaka</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-phone2"></span>
                </div>
                <h3 class="mb-4">Contact Number</h3>
              <p><a href="tel://1234567920">+8801568181471</a></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-paper-plane"></span>
                </div>
                <h3 class="mb-4">Email Address</h3>
              <p><a href="raselges127@gmail.com">raselges127@gmail.com</a></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-globe"></span>
                </div>
                <h3 class="mb-4">Website</h3>
              <p><a href="">ranaprogrammer.com</a></p>
            </div>
        </div>
      </div>

      <div class="row no-gutters block-9">
        <div class="col-md-6 order-md-last d-flex">
          <form class="bg-light p-4 p-md-5 contact-form ">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" id="email" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" id="subject" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" onclick="Save()" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        
        </div>

        <div class="col-md-6 d-flex">
            <div class="img" style="background-image: url(images/about.jpg);"></div>
        </div>
      </div>
    </div>
  </section>

  <script>
    async function Save() {
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const subject = document.getElementById('subject').value;
        const message = document.getElementById('message').value;
        
        if (name.length === 0) {
            errorToast("Name Required !");
            return; // Exit the function if name is not provided
        }
        else if (email.length === 0) {
            errorToast("Email Required !");
            return; // Exit the function if email is not provided
        }
        else if (subject.length === 0) {
            errorToast("Subject Required !");
            return; // Exit the function if subject is not provided
        }
        else if (message.length === 0) {
            errorToast("Message Required !");
            return; // Exit the function if message is not provided
        }else{
          try {
            const response = await axios.post('/message-send', {
                name: name,
                email: email,
                subject: subject,
                message: message
            });

            if (response.status === 201 && response.data.status === "success") {
                successToast(response.data.message);
            } else {
                errorToast(response.data.message);
            }
        } catch (error) {
            errorToast("An error occurred. Please try again later.");
            console.error(error); // Log the error to console for debugging
        }
    }
        }


      
</script>
