/**
 * myDigi-Resume – jQuery & Bootstrap JS initializations
 * Author: Akhil Kuncham
 */

$(function () {

  /* --------------------------------------------------
     1. Bootstrap Tooltips – initialize all
  -------------------------------------------------- */
  var tooltipEls = document.querySelectorAll('[data-bs-toggle="tooltip"]');
  tooltipEls.forEach(function (el) { new bootstrap.Tooltip(el); });

  /* --------------------------------------------------
     2. Bootstrap Popovers – initialize all
  -------------------------------------------------- */
  var popoverEls = document.querySelectorAll('[data-bs-toggle="popover"]');
  popoverEls.forEach(function (el) { new bootstrap.Popover(el, { trigger: 'focus' }); });

  /* --------------------------------------------------
     3. Navbar scroll shadow
  -------------------------------------------------- */
  $(window).on('scroll', function () {
    if ($(this).scrollTop() > 60) {
      $('.navbar').css('padding', '0.5rem 0');
    } else {
      $('.navbar').css('padding', '0.9rem 0');
    }
  });

  /* --------------------------------------------------
     4. Smooth scroll for in-page links
  -------------------------------------------------- */
  $('a.nav-link[href^="#"]').on('click', function (e) {
    var target = $(this).attr('href');
    if ($(target).length) {
      e.preventDefault();
      $('html, body').animate({ scrollTop: $(target).offset().top - 72 }, 700, 'swing');
      // Collapse mobile navbar
      $('.navbar-collapse').collapse('hide');
    }
  });

  /* --------------------------------------------------
     5. Fade-up scroll animation (IntersectionObserver)
  -------------------------------------------------- */
  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        $(entry.target).addClass('visible');
      }
    });
  }, { threshold: 0.12 });

  document.querySelectorAll('.fade-up').forEach(function (el) {
    observer.observe(el);
  });

  /* --------------------------------------------------
     6. Progress bars – animate on scroll
  -------------------------------------------------- */
  var bars = document.querySelectorAll('.progress-bar[data-width]');
  var barObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        var width = entry.target.getAttribute('data-width');
        entry.target.style.width = width + '%';
        entry.target.setAttribute('aria-valuenow', width);
        barObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });

  bars.forEach(function (bar) {
    bar.style.width = '0%';
    barObserver.observe(bar);
  });

  /* --------------------------------------------------
     7. jQuery – "Quick Contact" button triggers modal
  -------------------------------------------------- */
  $('#quickContactBtn').on('click', function () {
    var modal = new bootstrap.Modal(document.getElementById('contactModal'));
    modal.show();
    // jQuery show/hide demo: briefly show a dynamic alert
    $('#dynamic-alert').fadeIn(400).delay(3000).fadeOut(600);
  });

  /* --------------------------------------------------
     8. jQuery – card hover effects
  -------------------------------------------------- */
  $('.project-card').on('mouseenter', function () {
    $(this).find('.card-title').css('color', '#6366f1');
  }).on('mouseleave', function () {
    $(this).find('.card-title').css('color', '#f1f5f9');
  });

  /* --------------------------------------------------
     9. Contact form – Bootstrap validation
  -------------------------------------------------- */
  var form = document.getElementById('contactForm');
  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      e.stopPropagation();
      if (!form.checkValidity()) {
        form.classList.add('was-validated');
        // jQuery shake effect on invalid
        $(form).addClass('shake');
        setTimeout(function () { $(form).removeClass('shake'); }, 500);
      } else {
        form.classList.add('was-validated');
        // Show success alert
        $('#form-success').fadeIn(400);
        setTimeout(function () { $('#form-success').fadeOut(600); }, 4000);
        form.reset();
        form.classList.remove('was-validated');
      }
    });
  }

  /* --------------------------------------------------
     10. jQuery – toggle skills info box
  -------------------------------------------------- */
  $('#toggleSkillsBtn').on('click', function () {
    $('#skillsExtra').slideToggle(400);
    var text = $(this).text() === 'Show More Skills' ? 'Show Less' : 'Show More Skills';
    $(this).text(text);
  });

  /* --------------------------------------------------
     11. jQuery – typing effect in hero
  -------------------------------------------------- */
  var roles = [
    'Full Stack Developer',
    'Bootstrap Enthusiast',
    'PHP / MySQL Developer',
    'Open Source Contributor'
  ];
  var roleIndex = 0, charIndex = 0, isDeleting = false;
  var $typed = $('#typed-role');

  function type() {
    var current = roles[roleIndex];
    if (isDeleting) {
      $typed.text(current.substring(0, charIndex--));
    } else {
      $typed.text(current.substring(0, charIndex++));
    }
    var delay = isDeleting ? 50 : 100;
    if (!isDeleting && charIndex === current.length + 1) {
      delay = 2000; isDeleting = true;
    } else if (isDeleting && charIndex === 0) {
      isDeleting = false; roleIndex = (roleIndex + 1) % roles.length; delay = 400;
    }
    setTimeout(type, delay);
  }
  if ($typed.length) type();

});

/* --------------------------------------------------
   CSS Shake animation (injected via JS)
-------------------------------------------------- */
(function () {
  var style = document.createElement('style');
  style.textContent = '@keyframes shake{0%,100%{transform:translateX(0)}20%{transform:translateX(-8px)}40%{transform:translateX(8px)}60%{transform:translateX(-5px)}80%{transform:translateX(5px)}}.shake{animation:shake 0.4s ease}';
  document.head.appendChild(style);
})();
