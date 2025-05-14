<?php $__env->startSection('title', 'Ремонт квартир в Батайске под ключ | Отделочные работы | ЮгСтиль'); ?>
<?php $__env->startSection('meta_description', 'Профессиональные услуги ремонта квартир в Батайске и Ростове под ключ. Отделка помещений, ремонтные работы любой сложности с гарантией качества. Выезд на замер бесплатно.'); ?>
<?php $__env->startSection('meta_keywords', 'ремонт квартир, ремонт квартир под ключ, отделка, отделочные работы, ремонт квартир в Батайске, ремонт квартир в Ростове, услуги ремонта квартир, отделка помещений, квартира под ремонт'); ?>
<?php $__env->startSection('meta_image', asset('img/style/1/style_1.webp')); ?>

<?php $__env->startSection('head_scripts'); ?>
<!-- Разметка Schema.org для услуги ремонта квартир -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Ремонт квартир в Батайске под ключ",
  "provider": {
    "@type": "Organization",
    "name": "ЮгСтиль Батайск",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Батайск",
      "addressRegion": "Ростовская область",
      "addressCountry": "RU"
    },
    "telephone": "+7 904 448 2283"
  },
  "areaServed": [
    {
      "@type": "City",
      "name": "Батайск"
    },
    {
      "@type": "City",
      "name": "Ростов-на-Дону"
    }
  ],
  "description": "Профессиональные услуги ремонта квартир и отделочные работы. Выполняем ремонт под ключ в Батайске и Ростове-на-Дону.",
  "serviceType": ["Ремонт квартир", "Отделочные работы", "Ремонт под ключ"],
  "offers": {
    "@type": "Offer",
    "priceSpecification": {
      "@type": "PriceSpecification",
      "price": "от 3000",
      "priceCurrency": "RUB",
      "unitText": "м²"
    }
  },
  "image": "<?php echo e(asset('img/style/1/style_1.webp')); ?>",
  "url": "<?php echo e(url('/')); ?>"
}
</script>

<!-- Разметка Schema.org для организации -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "ЮгСтиль Батайск",
  "description": "Компания по ремонту и отделке квартир в Батайске и Ростове-на-Дону",
  "url": "<?php echo e(url('/')); ?>",
  "telephone": "+7 904 448 2283",
  "image": "<?php echo e(asset('img/style/1/style_1.webp')); ?>",
  "priceRange": "$$",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Батайск",
    "addressRegion": "Ростовская область",
    "addressCountry": "RU"
  },
  "openingHours": "Mo-Fr 09:00-19:00 Sa 10:00-17:00",
  "sameAs": [
    "https://www.facebook.com/stroybts",
    "https://www.instagram.com/stroybts.ru/",
    "https://vk.com/stroybts"
  ]
}
</script>

<!-- Разметка Schema.org для хлебных крошек -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "Главная",
    "item": "<?php echo e(url('/')); ?>"
  }]
}
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('sections.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('sections.advantages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('sections.portfolio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('sections.services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('sections.workflow', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('sections.projects-gallery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('sections.testimonials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('sections.faq', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('sections.map', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Маска для телефона
    const phoneInputs = document.querySelectorAll('input[type="tel"]');
    phoneInputs.forEach(function(input) {
        input.addEventListener('input', function(e) {
            let x = e.target.value.replace(/\D/g, '').match(/(\d{0,1})(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})/);
            e.target.value = !x[2] ? x[1] : '+' + x[1] + ' (' + x[2] + ') ' + (x[3] ? x[3] + '-' + x[4] : '') + (x[5] ? '-' + x[5] : '');
        });
    });
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\stroybts\resources\views/welcome.blade.php ENDPATH**/ ?>