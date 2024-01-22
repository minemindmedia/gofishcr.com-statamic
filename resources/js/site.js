import Alpine from 'alpinejs'
import collapse from '@alpinejs/collapse'
import morph from '@alpinejs/morph'
import persist from '@alpinejs/persist'
import focus from '@alpinejs/focus'
import Flickity from 'flickity'
import flatpickr from "flatpickr"

// Global get CSRF token function (used by forms).
window.getToken = async () => {
    return await fetch('/!/statamic-peak-tools/dynamic-token/refresh')
        .then((res) => res.json())
        .then((data) => {
            return data.csrf_token
        })
        .catch((error) => {
            this.error = 'Something went wrong. Please try again later.'
        })
}

// Call Alpine.
window.Alpine = Alpine
Alpine.plugin([collapse, focus, morph, persist])
Alpine.start()



// Flatpickr





// Carousels

function carousel() {
    return {
      active: 0,
      init() {
        var flkty = new Flickity(this.$refs.carousel, {
          wrapAround: true
        });
        flkty.on('change', i => this.active = i);
      }
    }
  }

  function carouselFilter() {
    return {
      active: 0,
      changeActive(i) {
        this.active = i;

        this.$nextTick(() => {
          let flkty = Flickity.data( this.$el.querySelectorAll('.carousel')[i] );
          flkty.resize();

          console.log(flkty);
        });
      }
    }
  }



