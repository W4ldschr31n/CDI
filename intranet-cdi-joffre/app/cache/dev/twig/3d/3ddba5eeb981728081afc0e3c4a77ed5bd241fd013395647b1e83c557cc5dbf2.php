<?php

/* CdiBundle:Article:ajoutAuteur.html.twig */
class __TwigTemplate_0a72ac56de3b73feb30882f5af9a256dab5fe58362584ab0f32746606100d55b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CdiBundle:Article:ajoutAuteur.html.twig", 1);
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
        $__internal_d7103474b75ed2e3371de6887560cb563cd8176c4bf509a2bdd74f735a43a9cd = $this->env->getExtension("native_profiler");
        $__internal_d7103474b75ed2e3371de6887560cb563cd8176c4bf509a2bdd74f735a43a9cd->enter($__internal_d7103474b75ed2e3371de6887560cb563cd8176c4bf509a2bdd74f735a43a9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CdiBundle:Article:ajoutAuteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7103474b75ed2e3371de6887560cb563cd8176c4bf509a2bdd74f735a43a9cd->leave($__internal_d7103474b75ed2e3371de6887560cb563cd8176c4bf509a2bdd74f735a43a9cd_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5721c4a4373e4c8672099b2b02afdfcc8972f4faa2d559bc652ec0fc840061a6 = $this->env->getExtension("native_profiler");
        $__internal_5721c4a4373e4c8672099b2b02afdfcc8972f4faa2d559bc652ec0fc840061a6->enter($__internal_5721c4a4373e4c8672099b2b02afdfcc8972f4faa2d559bc652ec0fc840061a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "<style>
    i{
        margin-top: 20px;
        margin-bottom: 10px;
        font-size: 12px;
    }

    #auteurs-proposition{
        list-style: none;
        padding: 0;
    }

    #auteurs-proposition li{
        width: 300px;
        background-color: #4e678b;
        font-size: 13px;
        color: white;
        margin-bottom: 5px;
        padding: 10px;
    }

    #auteurs-proposition li:hover{
        cursor: pointer;
    }
</style>
";
        
        $__internal_5721c4a4373e4c8672099b2b02afdfcc8972f4faa2d559bc652ec0fc840061a6->leave($__internal_5721c4a4373e4c8672099b2b02afdfcc8972f4faa2d559bc652ec0fc840061a6_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_67adaf2b6e242b8656eb650222b7ebcf87b21d146ca501b789309eac1ea15d92 = $this->env->getExtension("native_profiler");
        $__internal_67adaf2b6e242b8656eb650222b7ebcf87b21d146ca501b789309eac1ea15d92->enter($__internal_67adaf2b6e242b8656eb650222b7ebcf87b21d146ca501b789309eac1ea15d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "    <h2 class=\"fil_ariane\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("administration");
        echo "\">Administration</a> > Ajout d'un article > Auteur de l'article</h2>
    <section class=\"section\">
        <h4 style=\"margin: 0; text-transform: uppercase;\">Auteur du nouvel article :</h4>
        <p style=\"font-size: 13px;\">Saisissez l'auteur de votre nouvel article. Si l'auteur est déjà présent en base de données, cliquez sûr son nom dans la liste et validez. Sinon il sera automatiquement ajouté. Si l'article n'a pas d'auteur validez sans saisie.</p>

        <form action=\"#\" method=\"post\" style=\"margin-top: 30px\">
            <input type=\"text\" name=\"prenom\" placeholder=\"Prénom\" class=\"auteur-input\" id=\"input-prenom\" autocomplete=\"off\"/>
            <input type=\"text\" name=\"nom\" placeholder=\"Nom\" class=\"auteur-input\" id=\"input-nom\" autocomplete=\"off\"/>
            <input type=\"submit\" value=\"Suivant >\" style=\"float: right;\">
        </form>

        <i></i>
        <ul id=\"auteurs-proposition\">

        </ul>
    </section>
";
        
        $__internal_67adaf2b6e242b8656eb650222b7ebcf87b21d146ca501b789309eac1ea15d92->leave($__internal_67adaf2b6e242b8656eb650222b7ebcf87b21d146ca501b789309eac1ea15d92_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_09afea5f407bf1cde7e31177e1df301cb95b899c02fdf99107541b5cabb6bbd4 = $this->env->getExtension("native_profiler");
        $__internal_09afea5f407bf1cde7e31177e1df301cb95b899c02fdf99107541b5cabb6bbd4->enter($__internal_09afea5f407bf1cde7e31177e1df301cb95b899c02fdf99107541b5cabb6bbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
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
        // line 81
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
        
        $__internal_09afea5f407bf1cde7e31177e1df301cb95b899c02fdf99107541b5cabb6bbd4->leave($__internal_09afea5f407bf1cde7e31177e1df301cb95b899c02fdf99107541b5cabb6bbd4_prof);

    }

    public function getTemplateName()
    {
        return "CdiBundle:Article:ajoutAuteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 81,  111 => 52,  105 => 51,  80 => 33,  74 => 32,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/*     i{*/
/*         margin-top: 20px;*/
/*         margin-bottom: 10px;*/
/*         font-size: 12px;*/
/*     }*/
/* */
/*     #auteurs-proposition{*/
/*         list-style: none;*/
/*         padding: 0;*/
/*     }*/
/* */
/*     #auteurs-proposition li{*/
/*         width: 300px;*/
/*         background-color: #4e678b;*/
/*         font-size: 13px;*/
/*         color: white;*/
/*         margin-bottom: 5px;*/
/*         padding: 10px;*/
/*     }*/
/* */
/*     #auteurs-proposition li:hover{*/
/*         cursor: pointer;*/
/*     }*/
/* </style>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     <h2 class="fil_ariane"><a href="{{ path('administration') }}">Administration</a> > Ajout d'un article > Auteur de l'article</h2>*/
/*     <section class="section">*/
/*         <h4 style="margin: 0; text-transform: uppercase;">Auteur du nouvel article :</h4>*/
/*         <p style="font-size: 13px;">Saisissez l'auteur de votre nouvel article. Si l'auteur est déjà présent en base de données, cliquez sûr son nom dans la liste et validez. Sinon il sera automatiquement ajouté. Si l'article n'a pas d'auteur validez sans saisie.</p>*/
/* */
/*         <form action="#" method="post" style="margin-top: 30px">*/
/*             <input type="text" name="prenom" placeholder="Prénom" class="auteur-input" id="input-prenom" autocomplete="off"/>*/
/*             <input type="text" name="nom" placeholder="Nom" class="auteur-input" id="input-nom" autocomplete="off"/>*/
/*             <input type="submit" value="Suivant >" style="float: right;">*/
/*         </form>*/
/* */
/*         <i></i>*/
/*         <ul id="auteurs-proposition">*/
/* */
/*         </ul>*/
/*     </section>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
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
/* {% endblock %}*/
/* */
