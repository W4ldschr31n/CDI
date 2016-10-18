<?php

/* AppBundle::administration.html.twig */
class __TwigTemplate_4948862fcb962286d6c13d9ac6b23d74183e1822d569f01013c8b67d4f6afff6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle::administration.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6cc4e51919f0a3af8452cedb81264a754ecf3fc0cf4ec1b42ad26a5d182663e = $this->env->getExtension("native_profiler");
        $__internal_d6cc4e51919f0a3af8452cedb81264a754ecf3fc0cf4ec1b42ad26a5d182663e->enter($__internal_d6cc4e51919f0a3af8452cedb81264a754ecf3fc0cf4ec1b42ad26a5d182663e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::administration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6cc4e51919f0a3af8452cedb81264a754ecf3fc0cf4ec1b42ad26a5d182663e->leave($__internal_d6cc4e51919f0a3af8452cedb81264a754ecf3fc0cf4ec1b42ad26a5d182663e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4b69a4906063290868d4eaf1a0d5312d9d92a08da945bb4b2e284bb7f228db8d = $this->env->getExtension("native_profiler");
        $__internal_4b69a4906063290868d4eaf1a0d5312d9d92a08da945bb4b2e284bb7f228db8d->enter($__internal_4b69a4906063290868d4eaf1a0d5312d9d92a08da945bb4b2e284bb7f228db8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/administration.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_4b69a4906063290868d4eaf1a0d5312d9d92a08da945bb4b2e284bb7f228db8d->leave($__internal_4b69a4906063290868d4eaf1a0d5312d9d92a08da945bb4b2e284bb7f228db8d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e3307e6b592b4685e1576cec1d71ba4b36295f4f0ba17a756b1548d7c16d341 = $this->env->getExtension("native_profiler");
        $__internal_1e3307e6b592b4685e1576cec1d71ba4b36295f4f0ba17a756b1548d7c16d341->enter($__internal_1e3307e6b592b4685e1576cec1d71ba4b36295f4f0ba17a756b1548d7c16d341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h2 class=\"fil_ariane\">ADMINISTRATION</h2>
    <section class=\"section\" style=\"margin-bottom: 40px; position: relative; top: -10px;\">
        <h3 style=\"font-size: 14px; font-weight: normal; text-transform: uppercase; margin: -10px 0 5px;\">Recherche :</h3>
        ";
        // line 11
        $this->loadTemplate("AppBundle::formulaireRecherche.html.twig", "AppBundle::administration.html.twig", 11)->display($context);
        // line 12
        echo "    </section>

    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("auteur_ajout");
        echo "\" class=\"tuile\">
        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/add_author.png"), "html", null, true);
        echo "\" alt=\"Ajout d'un auteur\" />
        <h2>Ajout d'un auteur</h2>
    </a>
    <div class=\"separation\"></div>
    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("auteur_liste");
        echo "\" class=\"tuile\">
        <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/manage_authors.png"), "html", null, true);
        echo "\" alt=\"Gestion des auteurs\" />
        <h2>Gestion des auteurs</h2>
    </a>
    <div class=\"separation\"></div>
    <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("article_ajout_auteur");
        echo "\" class=\"tuile\">
        <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/add_article.png"), "html", null, true);
        echo "\" alt=\"Ajout d'un article\" />
        <h2>Ajout d'un article</h2>
    </a>

    <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("article_liste");
        echo "\" class=\"tuile\">
        <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/manage_articles.png"), "html", null, true);
        echo "\" alt=\"Gestion des articles\" />
        <h2>Gestion des articles</h2>
    </a>
    <div class=\"separation\"></div>
    <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("periodique_ajout");
        echo "\" class=\"tuile\">
        <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/add_magazine.png"), "html", null, true);
        echo "\" alt=\"Ajout d'un périodique\" />
        <h2>Ajout d'un périodique</h2>
    </a>

    <div class=\"separation\"></div>
    <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("periodique_liste");
        echo "\" class=\"tuile\">
        <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/manage_magazines.png"), "html", null, true);
        echo "\" alt=\"Gestion des périodiques\" />
        <h2>Gestion des périodiques</h2>
    </a>
</section>

<script type=\"text/javascript\">
    document.getElementById(\"recherche_avancee\").addEventListener(\"click\", function(){
        // Afficher
        if(document.getElementById(\"champs_recherche_avancee\").style.display == \"none\"){
            document.getElementById(\"champs_recherche_avancee\").style.display = \"block\";
            document.getElementById(\"recherche_avancee\").innerHTML = \"Fermer la recherche avancée\";
        }

        // Cacher
        else{
            document.getElementById(\"champs_recherche_avancee\").style.display = \"none\";
            document.getElementById(\"recherche_avancee\").innerHTML = \"Recherche avancée\";
        }
    });

</script>
";
        
        $__internal_1e3307e6b592b4685e1576cec1d71ba4b36295f4f0ba17a756b1548d7c16d341->leave($__internal_1e3307e6b592b4685e1576cec1d71ba4b36295f4f0ba17a756b1548d7c16d341_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::administration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 41,  124 => 40,  116 => 35,  112 => 34,  105 => 30,  101 => 29,  94 => 25,  90 => 24,  83 => 20,  79 => 19,  72 => 15,  68 => 14,  64 => 12,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('css/administration.css') }}"/>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <h2 class="fil_ariane">ADMINISTRATION</h2>*/
/*     <section class="section" style="margin-bottom: 40px; position: relative; top: -10px;">*/
/*         <h3 style="font-size: 14px; font-weight: normal; text-transform: uppercase; margin: -10px 0 5px;">Recherche :</h3>*/
/*         {% include 'AppBundle::formulaireRecherche.html.twig' %}*/
/*     </section>*/
/* */
/*     <a href="{{ path('auteur_ajout') }}" class="tuile">*/
/*         <img src="{{ asset('img/add_author.png') }}" alt="Ajout d'un auteur" />*/
/*         <h2>Ajout d'un auteur</h2>*/
/*     </a>*/
/*     <div class="separation"></div>*/
/*     <a href="{{ path('auteur_liste') }}" class="tuile">*/
/*         <img src="{{ asset('img/manage_authors.png') }}" alt="Gestion des auteurs" />*/
/*         <h2>Gestion des auteurs</h2>*/
/*     </a>*/
/*     <div class="separation"></div>*/
/*     <a href="{{ path('article_ajout_auteur') }}" class="tuile">*/
/*         <img src="{{ asset('img/add_article.png') }}" alt="Ajout d'un article" />*/
/*         <h2>Ajout d'un article</h2>*/
/*     </a>*/
/* */
/*     <a href="{{ path('article_liste') }}" class="tuile">*/
/*         <img src="{{ asset('img/manage_articles.png') }}" alt="Gestion des articles" />*/
/*         <h2>Gestion des articles</h2>*/
/*     </a>*/
/*     <div class="separation"></div>*/
/*     <a href="{{ path('periodique_ajout') }}" class="tuile">*/
/*         <img src="{{ asset('img/add_magazine.png') }}" alt="Ajout d'un périodique" />*/
/*         <h2>Ajout d'un périodique</h2>*/
/*     </a>*/
/* */
/*     <div class="separation"></div>*/
/*     <a href="{{ path('periodique_liste') }}" class="tuile">*/
/*         <img src="{{ asset('img/manage_magazines.png') }}" alt="Gestion des périodiques" />*/
/*         <h2>Gestion des périodiques</h2>*/
/*     </a>*/
/* </section>*/
/* */
/* <script type="text/javascript">*/
/*     document.getElementById("recherche_avancee").addEventListener("click", function(){*/
/*         // Afficher*/
/*         if(document.getElementById("champs_recherche_avancee").style.display == "none"){*/
/*             document.getElementById("champs_recherche_avancee").style.display = "block";*/
/*             document.getElementById("recherche_avancee").innerHTML = "Fermer la recherche avancée";*/
/*         }*/
/* */
/*         // Cacher*/
/*         else{*/
/*             document.getElementById("champs_recherche_avancee").style.display = "none";*/
/*             document.getElementById("recherche_avancee").innerHTML = "Recherche avancée";*/
/*         }*/
/*     });*/
/* */
/* </script>*/
/* {% endblock %}*/
/* */
