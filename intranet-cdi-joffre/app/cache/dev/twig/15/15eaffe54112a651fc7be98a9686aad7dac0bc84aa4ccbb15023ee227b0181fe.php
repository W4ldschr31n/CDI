<?php

/* ::base.html.twig */
class __TwigTemplate_bdc2b5824f1242477bc6649f635d5ce012ec64ae3b5986a4e0598db28df30369 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7aa2e5c79af7897118bf1aa13bf66bf4d539d496f2550da786bbeafffcb63871 = $this->env->getExtension("native_profiler");
        $__internal_7aa2e5c79af7897118bf1aa13bf66bf4d539d496f2550da786bbeafffcb63871->enter($__internal_7aa2e5c79af7897118bf1aa13bf66bf4d539d496f2550da786bbeafffcb63871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\"/>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <header>
            <div id=\"inner-header\">
                <div id=\"logo\">
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" /></a>
                </div>
                <h1>Centre de documentation</h1>
                <nav>
                    <ul>
                        <li><a href=\"http://www.univ-nantes.fr/\">Université</a></li>
                        <li><a href=\"\">À propos</a></li>
                        <li><a href=\"\">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        ";
        // line 27
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "has", array(0 => "user"), "method")) {
            // line 28
            echo "        <section id=\"user\">
            <div id=\"inner-user\">

                <img src=\"http://www.buira.org/assets/images/shared/default-profile.png\" alt=\"Photo de profil\" id=\"photo_profil\"/>
                <p id=\"nom_profil\" style=\"font-family: Arial\">";
            // line 32
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method")), "html", null, true);
            echo "</p>
                <a class=\"deconnexion\" href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("deconnexion");
            echo "\">Déconnexion</a>

            </div>
        </section>
        ";
        }
        // line 38
        echo "        <div id=\"contenu\">
            ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "        </div>

        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.2.1.min.js\"></script>
        ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "    </body>
</html>
";
        
        $__internal_7aa2e5c79af7897118bf1aa13bf66bf4d539d496f2550da786bbeafffcb63871->leave($__internal_7aa2e5c79af7897118bf1aa13bf66bf4d539d496f2550da786bbeafffcb63871_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b2c5a880e7d71d07451083ea51ea291ec27b97439896b7efac3f93f5179a81f = $this->env->getExtension("native_profiler");
        $__internal_6b2c5a880e7d71d07451083ea51ea291ec27b97439896b7efac3f93f5179a81f->enter($__internal_6b2c5a880e7d71d07451083ea51ea291ec27b97439896b7efac3f93f5179a81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue - CDI";
        
        $__internal_6b2c5a880e7d71d07451083ea51ea291ec27b97439896b7efac3f93f5179a81f->leave($__internal_6b2c5a880e7d71d07451083ea51ea291ec27b97439896b7efac3f93f5179a81f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a01921ba04bc58d35148133c69a3a85bdee8901436141bbb15a328d4dd2489a3 = $this->env->getExtension("native_profiler");
        $__internal_a01921ba04bc58d35148133c69a3a85bdee8901436141bbb15a328d4dd2489a3->enter($__internal_a01921ba04bc58d35148133c69a3a85bdee8901436141bbb15a328d4dd2489a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a01921ba04bc58d35148133c69a3a85bdee8901436141bbb15a328d4dd2489a3->leave($__internal_a01921ba04bc58d35148133c69a3a85bdee8901436141bbb15a328d4dd2489a3_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a19cb9c7590ea7320b9c9f8aecfd82b50bd8ce594131400b2472140b65c0ceb = $this->env->getExtension("native_profiler");
        $__internal_2a19cb9c7590ea7320b9c9f8aecfd82b50bd8ce594131400b2472140b65c0ceb->enter($__internal_2a19cb9c7590ea7320b9c9f8aecfd82b50bd8ce594131400b2472140b65c0ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2a19cb9c7590ea7320b9c9f8aecfd82b50bd8ce594131400b2472140b65c0ceb->leave($__internal_2a19cb9c7590ea7320b9c9f8aecfd82b50bd8ce594131400b2472140b65c0ceb_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2004e8c34e09359b3edd4bce4cf96eb383c61316e7dbb9532db74c7f84abc701 = $this->env->getExtension("native_profiler");
        $__internal_2004e8c34e09359b3edd4bce4cf96eb383c61316e7dbb9532db74c7f84abc701->enter($__internal_2004e8c34e09359b3edd4bce4cf96eb383c61316e7dbb9532db74c7f84abc701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2004e8c34e09359b3edd4bce4cf96eb383c61316e7dbb9532db74c7f84abc701->leave($__internal_2004e8c34e09359b3edd4bce4cf96eb383c61316e7dbb9532db74c7f84abc701_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 43,  134 => 39,  123 => 6,  111 => 5,  102 => 44,  100 => 43,  95 => 40,  93 => 39,  90 => 38,  82 => 33,  78 => 32,  72 => 28,  70 => 27,  53 => 15,  44 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Bienvenue - CDI{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="stylesheet" href="{{ asset('css/base.css') }}"/>*/
/*         <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <header>*/
/*             <div id="inner-header">*/
/*                 <div id="logo">*/
/*                     <a href="{{ path('accueil') }}"><img src="{{ asset('img/logo.png') }}" /></a>*/
/*                 </div>*/
/*                 <h1>Centre de documentation</h1>*/
/*                 <nav>*/
/*                     <ul>*/
/*                         <li><a href="http://www.univ-nantes.fr/">Université</a></li>*/
/*                         <li><a href="">À propos</a></li>*/
/*                         <li><a href="">Contact</a></li>*/
/*                     </ul>*/
/*                 </nav>*/
/*             </div>*/
/*         </header>*/
/*         {% if app.session.has('user') %}*/
/*         <section id="user">*/
/*             <div id="inner-user">*/
/* */
/*                 <img src="http://www.buira.org/assets/images/shared/default-profile.png" alt="Photo de profil" id="photo_profil"/>*/
/*                 <p id="nom_profil" style="font-family: Arial">{{ app.session.get('user')|upper }}</p>*/
/*                 <a class="deconnexion" href="{{ path('deconnexion') }}">Déconnexion</a>*/
/* */
/*             </div>*/
/*         </section>*/
/*         {% endif %}*/
/*         <div id="contenu">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/* */
/*         <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.1.min.js"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
