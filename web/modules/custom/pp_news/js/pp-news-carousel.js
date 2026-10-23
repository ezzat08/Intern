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

          const getStep = () => {
            const item = track.querySelector(
              '.pp-news-carousel__item'
            );

            if (!item) {
              return track.clientWidth;
            }

            const gap = parseFloat(
              getComputedStyle(track).columnGap
            ) || 0;

            return item.getBoundingClientRect().width + gap;
          };

          previous.addEventListener('click', () => {
            track.scrollBy({
              left: -getStep(),
              behavior: 'smooth',
            });
          });

          next.addEventListener('click', () => {
            track.scrollBy({
              left: getStep(),
              behavior: 'smooth',
            });
          });
        });
    },
  };
})(Drupal, once);