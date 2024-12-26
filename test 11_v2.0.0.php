<!DOCTYPE html>
<html lang="en">
    <head>
        <title>test 1</title>
        <meta content="Default page description" name="description"/>
        <meta content="test 1" property="og:title"/>
        <meta content="Default page description" property="og:description"/>
        <meta content="<?php echo BASE_URL_IMAGE; ?>main/img/og/DEFAULT_PAGE_IMAGE.jpg" property="og:image"/>
        <meta content="<?php echo BASE_URL; ?>test 1" property="og:url"/>
        <?php include("tailwind/template/link-css.php"); ?>
        <link as="style" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" onload="this.onload=null;this.rel='stylesheet'" rel="preload"/>
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@graph": [
                    {
                        "@type": "WebSite",
                        "@id": "<?php echo BASE_URL; ?>#website",
                        "url": "<?php echo BASE_URL; ?>",
                        "name": "Bacancy",
                        "description": "Top product development company with Agile methodology. Hire software developers to get complete product development solution from the best agile software development company.",
                        "potentialAction": [
                            {
                                "@type": "SearchAction",
                                "target": {
                                    "@type": "EntryPoint",
                                    "urlTemplate": "<?php echo BASE_URL; ?>?s={search_term_string}"
                                },
                                "query-input": "required name=search_term_string"
                            }
                        ],
                        "inLanguage": "en-US"
                    },
                    {
                        "@type": "WebPage",
                        "@id": "<?php echo BASE_URL; ?>test-11/#webpage",
                        "url": "<?php echo BASE_URL; ?>test-11/",
                        "name": "test 1",
                        "isPartOf": {
                            "@id": "<?php echo BASE_URL; ?>#website"
                        },
                        "datePublished": "2013-04-15T13:23:16+00:00",
                        "dateModified": "2024-07-17T14:31:52+00:00",
                        "description": "Default page description"
                    }
                ]
            }
        </script>
        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "BreadcrumbList",
                "itemListElement": [
                    {
                        "@type": "ListItem",
                        "position": 1,
                        "item": {
                            "@type": "WebPage",
                            "@id": "<?php echo BASE_URL; ?>/",
                            "name": "Home"
                        }
                    },
                    {
                        "@type": "ListItem",
                        "position": 2,
                        "item": {
                            "@type": "WebPage",
                            "@id": "<?php echo BASE_URL; ?>hire-dedicated-developers-india/",
                            "url": "<?php echo BASE_URL; ?>hire-dedicated-developers-india",
                            "name": "Hire Developers"
                        }
                    },
                    {
                        "@type": "ListItem",
                        "position": 3,
                        "item": {
                            "@type": "WebPage",
                            "@id": "<?php echo BASE_URL; ?>test-11/",
                            "url": "<?php echo BASE_URL; ?>test-11",
                            "name": "Angular Developer"
                        }
                    }
                ]
            }
        </script>
    </head>
    <body>
        <section class="pt-md pb-0 container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>"> Home </a></li>
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>hire-dedicated-developers-india"> Hire Developers </a></li>
                    <li aria-current="page" class="breadcrumb-item active active">Angular Developer</li>
                </ol>
            </nav>
        </section>
        <?php include("template/common_js-tailwind.php"); ?>
  <?php include("tailwind/template/link-js.php"); ?>
  <?php include("main-boot-5/templates/localbusiness-schema.php"); ?>
  <?php include("main-boot-5/templates/chat-script.php"); ?>
        <script defer="" src="<?php echo BASE_URL; ?>tailwind/js/slider-one-item.js?V-7">
        </script>
        <script defer="" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" type="text/javascript">
        </script>
    </body>
</html>