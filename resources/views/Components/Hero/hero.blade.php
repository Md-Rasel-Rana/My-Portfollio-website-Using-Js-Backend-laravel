<section id="home-section" class="hero">
  <div id="particles-js"></div> <!-- Particle effect container -->
  <div class="home-slider owl-carousel">
    <div class="slider-item ">
      <div class="overlay"></div>
      <div class="container">
        <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
          <div class="one-third js-fullheight order-md-last img" style="background-image:url(images/bg_1.png);">
            <div class="overlay"></div>
          </div> 
          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax="properties: { translateY: '70%' }">
            <div class="text">
              <span class="subheading">Hello!</span>
              <h1 class="mb-4 mt-3">I'm <span>Rasel Rana</span></h1>
              <h2 class="mb-4" id="element1"> </h2>
              <p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="{{ url('/Projects') }}" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="slider-item">
      <div class="overlay"></div>
      <div class="container">
        <div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
          <div class="one-third js-fullheight order-md-last img" style="background-image:url(images/bg_2.png);">
            <div class="overlay"></div>
          </div>
          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax="properties: { translateY: '70%' }">
            <div class="text">
              <span class="subheading">Hello!</span>
              <h1 class="mb-4 mt-3">I'm a <span > Full-Stack Developer </span> based in BD</h1>
              <h2 class="mb-4" id="element2"></h2>
              <p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="{{url('/Projects')}}" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  var options = {
    typeSpeed: 50,
    loop: true, // Continuous typing animation
  };

  var typed1 = new Typed('#element1', {
    ...options,
    strings: ['Full Stack Developer', 'Laravel Developer']
  });
  var typed1 = new Typed('#element2', {
    ...options,
    strings: ['Full Stack Developer', 'Laravel Developer']
  });
</script>