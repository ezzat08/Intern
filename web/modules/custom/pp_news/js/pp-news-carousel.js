
(function (Drupal, once) {
  Drupal.behaviors.ppNewsCarousel = {
    attach(context) {
      once('pp-news-carousel', '.pp-news-carousel', context)
        .forEach((carousel) => {
          const track = carousel.querySelector(
            '.pp-news-carousel__track'
          );
          const previous = carousel.querySelector(
            '.pp-news-carousel__arrow--prev'
          );
          const next = carousel.querySelector(
            '.pp-news-carousel__arrow--next'
          );

          if (!track || !previous || !next) {
            return;
          }

          previous.addEventListener('click', () => {
            track.scrollBy({
              left: -track.clientWidth,
              behavior: 'smooth',
            });
          });

          next.addEventListener('click', () => {
            track.scrollBy({
              left: track.clientWidth,
              behavior: 'smooth',
            });
          });
        });
    },
  };
})(Drupal, once);
