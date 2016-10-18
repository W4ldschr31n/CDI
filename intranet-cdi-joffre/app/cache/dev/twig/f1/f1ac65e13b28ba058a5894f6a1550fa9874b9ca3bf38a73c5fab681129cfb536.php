<?php

/* CdiBundle:Article:ajoutArticle.html.twig */
class __TwigTemplate_cc2cdaefa33e7aa5f3311c17a118739b218e1c083417c4f02324af991ece6391 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CdiBundle:Article:ajoutArticle.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b1278607c4c649ae168b36a59f8c63cf1d2da148e3fb1ceb97d67bb0e1b3ffb = $this->env->getExtension("native_profiler");
        $__internal_8b1278607c4c649ae168b36a59f8c63cf1d2da148e3fb1ceb97d67bb0e1b3ffb->enter($__internal_8b1278607c4c649ae168b36a59f8c63cf1d2da148e3fb1ceb97d67bb0e1b3ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CdiBundle:Article:ajoutArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b1278607c4c649ae168b36a59f8c63cf1d2da148e3fb1ceb97d67bb0e1b3ffb->leave($__internal_8b1278607c4c649ae168b36a59f8c63cf1d2da148e3fb1ceb97d67bb0e1b3ffb_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5143b23e83cb51d7160e42f8ca5ea998d26115f50eb881f3b76fc4db32d652fb = $this->env->getExtension("native_profiler");
        $__internal_5143b23e83cb51d7160e42f8ca5ea998d26115f50eb881f3b76fc4db32d652fb->enter($__internal_5143b23e83cb51d7160e42f8ca5ea998d26115f50eb881f3b76fc4db32d652fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\">
    <style>
        .form-field{
            display: block;
            margin-bottom: 5px;
        }

        label{
            display: inline-block;
            font-size: 13px;
            vertical-align: middle;
            min-width: 150px;
        }

        textarea{
            vertical-align: top;
        }

        i{
            display: block;
            font-size: 12px;
        }

       #valider{
            text-align: right;
            margin-top: 10px;
        }

        #periodiques-proposition li{
            width: 300px;
            background-color: #4e678b;
            font-size: 13px;
            color: white;
            margin-bottom: 5px;
            padding: 10px;
        }

        #periodiques-proposition li:hover{
            cursor: pointer;
        }
    </style>
";
        
        $__internal_5143b23e83cb51d7160e42f8ca5ea998d26115f50eb881f3b76fc4db32d652fb->leave($__internal_5143b23e83cb51d7160e42f8ca5ea998d26115f50eb881f3b76fc4db32d652fb_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8376415dd46a29b8f733311b4fe0fdc819b38c9b02c0af0e1ac490a358961f0 = $this->env->getExtension("native_profiler");
        $__internal_f8376415dd46a29b8f733311b4fe0fdc819b38c9b02c0af0e1ac490a358961f0->enter($__internal_f8376415dd46a29b8f733311b4fe0fdc819b38c9b02c0af0e1ac490a358961f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "    <h2 class=\"fil_ariane\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("administration");
        echo "\">Administration</a> > Ajout d'un article > Information de l'article</h2>
    <section class=\"section\">
        <h4 style=\"margin: 0; text-transform: uppercase;\">Informations du nouvel article :</h4>
        <p style=\"font-size: 13px; margin-bottom: 35px;\">Saisissez les informations sur le nouvel article.</p>
        ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 57
        echo "            <div class=\"form-field\">
                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label', array("label" => "Titre :"));
        echo "
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("placeholder" => "Titre")));
        echo "
            </div>

            ";
        // line 63
        echo "            <div class=\"form-field\">
            <form action=\"#\" method=\"post\">

                <input type=\"text\" name=\"prenom\" placeholder=\"Prénom\" class=\"auteur-input\" id=\"input-prenom\" autocomplete=\"off\"/>
                <input type=\"text\" name=\"nom\" placeholder=\"Nom\" class=\"auteur-input\" id=\"input-nom\" autocomplete=\"off\"/>
            </form>

            <i></i>
            <ul id=\"auteurs-proposition\">

            </ul>
            </div>

            ";
        // line 77
        echo "            <div class=\"form-field\">
                ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resume", array()), 'label', array("label" => "Résumé :"));
        echo "
                ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resume", array()), 'widget', array("attr" => array("placeholder" => "Résumé", "rows" => "7", "cols" => "50")));
        echo "
            </div>

            ";
        // line 83
        echo "            <div class=\"form-field\">
                ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateParution", array()), 'label', array("label" => "Date de parution :"));
        echo "
                ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateParution", array()), 'widget', array("attr" => array("class" => "calendar", "placeholder" => "JJ/MM/AAAA")));
        echo "
            </div>

            ";
        // line 89
        echo "            <div class=\"form-field\">
              <form action=\"#\" method=\"post\" style=\"margin-top: 30px\">
                  <input type=\"text\" name=\"nom\" placeholder=\"Nom du périodique\" id=\"input-periodique\" autocomplete=\"off\"/>
              </form>
            </div>

            <i></i>
            <ul id=\"periodiques-proposition\">

            </ul>

            ";
        // line 101
        echo "            <div class=\"form-field\">
                ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPeriodique", array()), 'label', array("label" => "Numéro du périodique :"));
        echo "
                ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPeriodique", array()), 'widget', array("attr" => array("placeholder" => "Numéro du périodique")));
        echo "
            </div>

            ";
        // line 107
        echo "            <div class=\"form-field\">
                ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pageDebut", array()), 'label', array("label" => "Page de début :"));
        echo "
                ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pageDebut", array()), 'widget', array("attr" => array("placeholder" => "Page de début")));
        echo "
            </div>

            ";
        // line 113
        echo "            <div class=\"form-field\">
                ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pageFin", array()), 'label', array("label" => "Page de fin (*) :"));
        echo "
                ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pageFin", array()), 'widget', array("attr" => array("placeholder" => "Page de fin")));
        echo "
            </div>

            <i>(*) : Champ facultatif</i>

            ";
        // line 121
        echo "            <div id=\"valider\">
                ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Enregistrer l'article"));
        echo "
            </div>

        ";
        // line 125
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </section>
";
        
        $__internal_f8376415dd46a29b8f733311b4fe0fdc819b38c9b02c0af0e1ac490a358961f0->leave($__internal_f8376415dd46a29b8f733311b4fe0fdc819b38c9b02c0af0e1ac490a358961f0_prof);

    }

    // line 129
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_989332283ea86528189cc6fa6945308f1e71adb4eef6df4c0cde142e2088d16c = $this->env->getExtension("native_profiler");
        $__internal_989332283ea86528189cc6fa6945308f1e71adb4eef6df4c0cde142e2088d16c->enter($__internal_989332283ea86528189cc6fa6945308f1e71adb4eef6df4c0cde142e2088d16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 130
        echo "    <script src=\"//code.jquery.com/jquery-1.10.2.js\"></script>
    <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
    <script type=\"text/javascript\">
        \$(function() {
            \$( \".calendar\" ).datepicker({ dateFormat: 'dd/mm/yy' });
            \$(\".calendar\").attr(\"type\", \"text\");
        });
    </script>

    ";
        // line 140
        echo "    <script type=\"text/javascript\">
        \$(function(){
            // On cache les div de proposition
            \$('i').css(\"display\", \"none\");
            \$('#periodiques-proposition').css(\"display\", \"none\");


            // Listener des changements de nom/prenom
            \$('#input-periodique').on('input', function(){
                // On ré-initialise le message d'info
                \$('i').css(\"display\", \"none\").html(\"\");
                \$('#periodiques-proposition').css(\"display\", \"none\").html(\"\");

                // On rempli les nom/prenom si ils sont vides
                var nom = \$(this).val();
                if(nom == \"\"){
                    return;
                }


                // On génère l'URL de la requête AJAX
                var url = '";
        // line 161
        echo $this->env->getExtension('routing')->getPath("ajax_recherche_periodique", array("nom" => "var-nom"));
        echo "';
                    url = url.replace(\"var-nom\", nom);


                \$.ajax({
                    url: url,
                    data: {
                        format: 'json'
                    },
                    success: function(data) {
                        // Si il n'y a pas de données
                        if(data.length < 1){
                            \$('i').css(\"display\", \"block\").html('Ce périodique n\\'existe pas, il sera ajouté dans la base de données.');
                            return;
                        }

                        // Sinon on affiche la liste
                        \$('i').css(\"display\", \"block\").html('Cliquez sur le périodique si il est dans la liste :');
                        \$('#periodiques-proposition').css(\"display\", \"block\");
                        \$(data).each(function(index){
                            if(!\$(\"#auteur\"+this.id).length){
                                var str = \"<li id=\\\"periodique\"+ this.id +\"\\\">\" + this.nom + \"</li>\";
                                \$('#periodiques-proposition').append(str);
                            }
                        });

                        \$('#periodiques-proposition li').each(function(index){
                           \$(this).click(function(){
                                var choix = \$(this).html();
                                \$('#input-periodique').val(choix);
                                \$('#periodiques-proposition').css(\"display\", \"none\");
                                \$('i').html('Le périodique sera importé depuis la base de donnée.');
                           });
                       });

                    },
                    type: 'GET'
                });
           });
        });
    </script>

    ";
        // line 204
        echo "    <script type=\"text/javascript\">
        \$(function(){
            // On cache les div de proposition
            \$('i').css(\"display\", \"none\");
            \$('#auteurs-proposition').css(\"display\", \"none\");


            // Listener des changements de nom/prenom
            \$('.auteur-input').each(function(index){
               \$(this).on('input', function(){
                    // On ré-initialise le message d'info
                    \$('i').css(\"display\", \"none\").html(\"\");
                    \$('#auteurs-proposition').css(\"display\", \"none\").html(\"\");

                    // On rempli les nom/prenom si ils sont vides
                    var prenom = \$('#input-prenom').val();
                    var nom = \$('#input-nom').val();

                    if(nom == \"\" && prenom == \"\"){
                        return;
                    }

                    if(prenom == \"\")
                        prenom = \"null\";

                    if(nom == \"\")
                        nom = \"null\";

                    // On génère l'URL de la requête AJAX
                    var url = '";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajax_recherche_auteur", array("prenom" => "var-prenom", "nom" => "var-nom")), "html", null, true);
        echo "';
                        url = url.replace(\"var-prenom\", prenom);
                        url = url.replace(\"var-nom\", nom);


                    \$.ajax({
                        url: url,
                        data: {
                            format: 'json'
                        },
                        error: function() {

                        },
                        success: function(data) {
                            // Si il n'y a pas de données
                            if(data.length < 1){
                                \$('i').css(\"display\", \"block\").html('Cet auteur n\\'existe pas, il sera ajouté dans la base de données.');
                                return;
                            }

                            // Sinon on affiche la liste
                            \$('i').css(\"display\", \"block\").html('Cliquez sur l\\'auteur si il est dans la liste :');
                            \$('#auteurs-proposition').css(\"display\", \"block\");
                            \$(data).each(function(index){
                                if(!\$(\"#auteur\"+this.id).length){
                                    var str = \"<li id=\\\"auteur\"+ this.id +\"\\\">\" + this.prenom.charAt(0).toUpperCase() + this.prenom.substr(1) + \" \" + this.nom.toUpperCase() + \"</li>\";
                                    \$('#auteurs-proposition').append(str);
                                }
                            });

                            \$('#auteurs-proposition li').each(function(index){
                               \$(this).click(function(){
                                    var choix = \$(this).html().split(' ', 2);
                                    \$('#input-prenom').val(choix[0]);
                                    \$('#input-nom').val(choix[1]);
                                    \$('#auteurs-proposition').css(\"display\", \"none\");
                                    \$('i').html('L\\'auteur sera importé depuis la base de donnée.');
                               });
                           });

                        },
                        type: 'GET'
                    });
               });
           });
        });
    </script>

";
        
        $__internal_989332283ea86528189cc6fa6945308f1e71adb4eef6df4c0cde142e2088d16c->leave($__internal_989332283ea86528189cc6fa6945308f1e71adb4eef6df4c0cde142e2088d16c_prof);

    }

    public function getTemplateName()
    {
        return "CdiBundle:Article:ajoutArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 233,  325 => 204,  280 => 161,  257 => 140,  246 => 130,  240 => 129,  230 => 125,  224 => 122,  221 => 121,  213 => 115,  209 => 114,  206 => 113,  200 => 109,  196 => 108,  193 => 107,  187 => 103,  183 => 102,  180 => 101,  167 => 89,  161 => 85,  157 => 84,  154 => 83,  148 => 79,  144 => 78,  141 => 77,  126 => 63,  120 => 59,  116 => 58,  113 => 57,  108 => 54,  104 => 53,  96 => 49,  90 => 48,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">*/
/*     <style>*/
/*         .form-field{*/
/*             display: block;*/
/*             margin-bottom: 5px;*/
/*         }*/
/* */
/*         label{*/
/*             display: inline-block;*/
/*             font-size: 13px;*/
/*             vertical-align: middle;*/
/*             min-width: 150px;*/
/*         }*/
/* */
/*         textarea{*/
/*             vertical-align: top;*/
/*         }*/
/* */
/*         i{*/
/*             display: block;*/
/*             font-size: 12px;*/
/*         }*/
/* */
/*        #valider{*/
/*             text-align: right;*/
/*             margin-top: 10px;*/
/*         }*/
/* */
/*         #periodiques-proposition li{*/
/*             width: 300px;*/
/*             background-color: #4e678b;*/
/*             font-size: 13px;*/
/*             color: white;*/
/*             margin-bottom: 5px;*/
/*             padding: 10px;*/
/*         }*/
/* */
/*         #periodiques-proposition li:hover{*/
/*             cursor: pointer;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     <h2 class="fil_ariane"><a href="{{ path('administration') }}">Administration</a> > Ajout d'un article > Information de l'article</h2>*/
/*     <section class="section">*/
/*         <h4 style="margin: 0; text-transform: uppercase;">Informations du nouvel article :</h4>*/
/*         <p style="font-size: 13px; margin-bottom: 35px;">Saisissez les informations sur le nouvel article.</p>*/
/*         {{ form_start(form) }}*/
/*             {{ form_errors(form) }}*/
/* */
/*             {# Titre #}*/
/*             <div class="form-field">*/
/*                 {{ form_label(form.titre, 'Titre :') }}*/
/*                 {{ form_widget(form.titre, {'attr': {'placeholder': 'Titre'}}) }}*/
/*             </div>*/
/* */
/*             {# Nom auteur #}*/
/*             <div class="form-field">*/
/*             <form action="#" method="post">*/
/* */
/*                 <input type="text" name="prenom" placeholder="Prénom" class="auteur-input" id="input-prenom" autocomplete="off"/>*/
/*                 <input type="text" name="nom" placeholder="Nom" class="auteur-input" id="input-nom" autocomplete="off"/>*/
/*             </form>*/
/* */
/*             <i></i>*/
/*             <ul id="auteurs-proposition">*/
/* */
/*             </ul>*/
/*             </div>*/
/* */
/*             {# Résumé #}*/
/*             <div class="form-field">*/
/*                 {{ form_label(form.resume, 'Résumé :') }}*/
/*                 {{ form_widget(form.resume, {'attr': {'placeholder': 'Résumé', 'rows': '7', 'cols': '50'}}) }}*/
/*             </div>*/
/* */
/*             {# Date de parution #}*/
/*             <div class="form-field">*/
/*                 {{ form_label(form.dateParution, 'Date de parution :') }}*/
/*                 {{ form_widget(form.dateParution, { 'attr': {'class': 'calendar', 'placeholder': 'JJ/MM/AAAA'} }) }}*/
/*             </div>*/
/* */
/*             {# Nom du périodique #}*/
/*             <div class="form-field">*/
/*               <form action="#" method="post" style="margin-top: 30px">*/
/*                   <input type="text" name="nom" placeholder="Nom du périodique" id="input-periodique" autocomplete="off"/>*/
/*               </form>*/
/*             </div>*/
/* */
/*             <i></i>*/
/*             <ul id="periodiques-proposition">*/
/* */
/*             </ul>*/
/* */
/*             {# Numéro du périodique #}*/
/*             <div class="form-field">*/
/*                 {{ form_label(form.numeroPeriodique, 'Numéro du périodique :') }}*/
/*                 {{ form_widget(form.numeroPeriodique, { 'attr': {'placeholder': 'Numéro du périodique'} }) }}*/
/*             </div>*/
/* */
/*             {# Page de début #}*/
/*             <div class="form-field">*/
/*                 {{ form_label(form.pageDebut, 'Page de début :') }}*/
/*                 {{ form_widget(form.pageDebut, { 'attr': {'placeholder': 'Page de début'} }) }}*/
/*             </div>*/
/* */
/*             {# Page de fin #}*/
/*             <div class="form-field">*/
/*                 {{ form_label(form.pageFin, 'Page de fin (*) :') }}*/
/*                 {{ form_widget(form.pageFin, { 'attr': {'placeholder': 'Page de fin'} }) }}*/
/*             </div>*/
/* */
/*             <i>(*) : Champ facultatif</i>*/
/* */
/*             {# Bouton valider #}*/
/*             <div id="valider">*/
/*                 {{ form_widget(form.save, { 'label': "Enregistrer l'article" }) }}*/
/*             </div>*/
/* */
/*         {{ form_end(form) }}*/
/*     </section>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script src="//code.jquery.com/jquery-1.10.2.js"></script>*/
/*     <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>*/
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             $( ".calendar" ).datepicker({ dateFormat: 'dd/mm/yy' });*/
/*             $(".calendar").attr("type", "text");*/
/*         });*/
/*     </script>*/
/* */
/*     {# JS nom périodique #}*/
/*     <script type="text/javascript">*/
/*         $(function(){*/
/*             // On cache les div de proposition*/
/*             $('i').css("display", "none");*/
/*             $('#periodiques-proposition').css("display", "none");*/
/* */
/* */
/*             // Listener des changements de nom/prenom*/
/*             $('#input-periodique').on('input', function(){*/
/*                 // On ré-initialise le message d'info*/
/*                 $('i').css("display", "none").html("");*/
/*                 $('#periodiques-proposition').css("display", "none").html("");*/
/* */
/*                 // On rempli les nom/prenom si ils sont vides*/
/*                 var nom = $(this).val();*/
/*                 if(nom == ""){*/
/*                     return;*/
/*                 }*/
/* */
/* */
/*                 // On génère l'URL de la requête AJAX*/
/*                 var url = '{{ path("ajax_recherche_periodique", {'nom': 'var-nom'}) }}';*/
/*                     url = url.replace("var-nom", nom);*/
/* */
/* */
/*                 $.ajax({*/
/*                     url: url,*/
/*                     data: {*/
/*                         format: 'json'*/
/*                     },*/
/*                     success: function(data) {*/
/*                         // Si il n'y a pas de données*/
/*                         if(data.length < 1){*/
/*                             $('i').css("display", "block").html('Ce périodique n\'existe pas, il sera ajouté dans la base de données.');*/
/*                             return;*/
/*                         }*/
/* */
/*                         // Sinon on affiche la liste*/
/*                         $('i').css("display", "block").html('Cliquez sur le périodique si il est dans la liste :');*/
/*                         $('#periodiques-proposition').css("display", "block");*/
/*                         $(data).each(function(index){*/
/*                             if(!$("#auteur"+this.id).length){*/
/*                                 var str = "<li id=\"periodique"+ this.id +"\">" + this.nom + "</li>";*/
/*                                 $('#periodiques-proposition').append(str);*/
/*                             }*/
/*                         });*/
/* */
/*                         $('#periodiques-proposition li').each(function(index){*/
/*                            $(this).click(function(){*/
/*                                 var choix = $(this).html();*/
/*                                 $('#input-periodique').val(choix);*/
/*                                 $('#periodiques-proposition').css("display", "none");*/
/*                                 $('i').html('Le périodique sera importé depuis la base de donnée.');*/
/*                            });*/
/*                        });*/
/* */
/*                     },*/
/*                     type: 'GET'*/
/*                 });*/
/*            });*/
/*         });*/
/*     </script>*/
/* */
/*     {# JS nom auteur #}*/
/*     <script type="text/javascript">*/
/*         $(function(){*/
/*             // On cache les div de proposition*/
/*             $('i').css("display", "none");*/
/*             $('#auteurs-proposition').css("display", "none");*/
/* */
/* */
/*             // Listener des changements de nom/prenom*/
/*             $('.auteur-input').each(function(index){*/
/*                $(this).on('input', function(){*/
/*                     // On ré-initialise le message d'info*/
/*                     $('i').css("display", "none").html("");*/
/*                     $('#auteurs-proposition').css("display", "none").html("");*/
/* */
/*                     // On rempli les nom/prenom si ils sont vides*/
/*                     var prenom = $('#input-prenom').val();*/
/*                     var nom = $('#input-nom').val();*/
/* */
/*                     if(nom == "" && prenom == ""){*/
/*                         return;*/
/*                     }*/
/* */
/*                     if(prenom == "")*/
/*                         prenom = "null";*/
/* */
/*                     if(nom == "")*/
/*                         nom = "null";*/
/* */
/*                     // On génère l'URL de la requête AJAX*/
/*                     var url = '{{ path("ajax_recherche_auteur", {'prenom': 'var-prenom', 'nom': 'var-nom'}) }}';*/
/*                         url = url.replace("var-prenom", prenom);*/
/*                         url = url.replace("var-nom", nom);*/
/* */
/* */
/*                     $.ajax({*/
/*                         url: url,*/
/*                         data: {*/
/*                             format: 'json'*/
/*                         },*/
/*                         error: function() {*/
/* */
/*                         },*/
/*                         success: function(data) {*/
/*                             // Si il n'y a pas de données*/
/*                             if(data.length < 1){*/
/*                                 $('i').css("display", "block").html('Cet auteur n\'existe pas, il sera ajouté dans la base de données.');*/
/*                                 return;*/
/*                             }*/
/* */
/*                             // Sinon on affiche la liste*/
/*                             $('i').css("display", "block").html('Cliquez sur l\'auteur si il est dans la liste :');*/
/*                             $('#auteurs-proposition').css("display", "block");*/
/*                             $(data).each(function(index){*/
/*                                 if(!$("#auteur"+this.id).length){*/
/*                                     var str = "<li id=\"auteur"+ this.id +"\">" + this.prenom.charAt(0).toUpperCase() + this.prenom.substr(1) + " " + this.nom.toUpperCase() + "</li>";*/
/*                                     $('#auteurs-proposition').append(str);*/
/*                                 }*/
/*                             });*/
/* */
/*                             $('#auteurs-proposition li').each(function(index){*/
/*                                $(this).click(function(){*/
/*                                     var choix = $(this).html().split(' ', 2);*/
/*                                     $('#input-prenom').val(choix[0]);*/
/*                                     $('#input-nom').val(choix[1]);*/
/*                                     $('#auteurs-proposition').css("display", "none");*/
/*                                     $('i').html('L\'auteur sera importé depuis la base de donnée.');*/
/*                                });*/
/*                            });*/
/* */
/*                         },*/
/*                         type: 'GET'*/
/*                     });*/
/*                });*/
/*            });*/
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
