<?php

/* CdiBundle:Periodique:ajout.html.twig */
class __TwigTemplate_4b35ebdb93acdf15231c93a838ed970d73fa7aa17eff46e086972f4004f86eaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CdiBundle:Periodique:ajout.html.twig", 1);
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
        $__internal_7c898a63cc19cac94ee4c4264550eb9e525eddf50e7fe49b37aa6fc765b5118b = $this->env->getExtension("native_profiler");
        $__internal_7c898a63cc19cac94ee4c4264550eb9e525eddf50e7fe49b37aa6fc765b5118b->enter($__internal_7c898a63cc19cac94ee4c4264550eb9e525eddf50e7fe49b37aa6fc765b5118b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CdiBundle:Periodique:ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c898a63cc19cac94ee4c4264550eb9e525eddf50e7fe49b37aa6fc765b5118b->leave($__internal_7c898a63cc19cac94ee4c4264550eb9e525eddf50e7fe49b37aa6fc765b5118b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_62ff9065383a91f4f79623e5aff26bbc415f228ec3d2cf3dee07daa19603caa3 = $this->env->getExtension("native_profiler");
        $__internal_62ff9065383a91f4f79623e5aff26bbc415f228ec3d2cf3dee07daa19603caa3->enter($__internal_62ff9065383a91f4f79623e5aff26bbc415f228ec3d2cf3dee07daa19603caa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <style>
        table {
            margin-top: 20px;
        }

        i{
            margin-top: 20px;
            margin-bottom: 10px;
            font-size: 12px;
        }

        #periodiques-proposition{
            list-style: none;
            padding: 0;
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
        
        $__internal_62ff9065383a91f4f79623e5aff26bbc415f228ec3d2cf3dee07daa19603caa3->leave($__internal_62ff9065383a91f4f79623e5aff26bbc415f228ec3d2cf3dee07daa19603caa3_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_6261f182535719ec3643e8a950eb13c555735d65c9545d33248db16d9adbe68f = $this->env->getExtension("native_profiler");
        $__internal_6261f182535719ec3643e8a950eb13c555735d65c9545d33248db16d9adbe68f->enter($__internal_6261f182535719ec3643e8a950eb13c555735d65c9545d33248db16d9adbe68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "    <h2 class=\"fil_ariane\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("administration");
        echo "\">Administration</a> > AJOUT D'UN PERIODIQUE</h2>
    <section class=\"section\">

        <h4 style=\"margin: 0; text-transform: uppercase;\">Nom du nouveau périodique :</h4>
        ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            <table>
                <tr>
                    <td>
                        ";
        // line 47
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom du périodique :"));
        echo "
                    </td>
                    <td>
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("placeholder" => "Nom")));
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        <br/>
                        ";
        // line 57
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ajout", array()), 'widget', array("label" => "Enregistrer le périodique"));
        echo "
                    </td>
                </tr>
            </table>
            <i></i>
            <ul id=\"periodiques-proposition\">

            </ul>

            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </section>

  <!--  <h2 class=\"fil_ariane\"><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("administration");
        echo "\">Administration</a> > Ajout d'un article > Périodique de l'article</h2>
    <section class=\"section\">
        <h4 style=\"margin: 0; text-transform: uppercase;\">Périodique du nouvel article :</h4>
        <p style=\"font-size: 13px;\">Saisissez le nom du périodique de votre nouvel article. Si le périodique est déjà présent en base de données, cliquez sûr son nom dans la liste et validez. Sinon il sera automatiquement ajouté. </p>

        <form action=\"#\" method=\"post\" style=\"margin-top: 30px\">
            <input type=\"text\" name=\"nom\" placeholder=\"Nom du périodique\" id=\"form.nom\" autocomplete=\"off\"/>
            <input type=\"submit\" value=\"Suivant >\" style=\"float: right;\">
        </form>

        <i></i>
        <ul id=\"periodiques-proposition\">

        </ul>
    </section> -->
";
        
        $__internal_6261f182535719ec3643e8a950eb13c555735d65c9545d33248db16d9adbe68f->leave($__internal_6261f182535719ec3643e8a950eb13c555735d65c9545d33248db16d9adbe68f_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a988af3c22275147d098d002fd2dd5d403578515b798c94a25b096c9e06591f2 = $this->env->getExtension("native_profiler");
        $__internal_a988af3c22275147d098d002fd2dd5d403578515b798c94a25b096c9e06591f2->enter($__internal_a988af3c22275147d098d002fd2dd5d403578515b798c94a25b096c9e06591f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "    <script type=\"text/javascript\">
        \$(function(){
            // On cache les div de proposition
            \$('i').css(\"display\", \"none\");
            \$('#periodiques-proposition').css(\"display\", \"none\");


            // Listener des changements de nom/prenom
            \$('#form_nom').on('input', function(){
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
        // line 110
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
                        } else {
                          alert(\"Votre code existe deja merci de ne pas l'ajouté\");
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
                                \$('#form_nom').val(choix);
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
        
        $__internal_a988af3c22275147d098d002fd2dd5d403578515b798c94a25b096c9e06591f2->leave($__internal_a988af3c22275147d098d002fd2dd5d403578515b798c94a25b096c9e06591f2_prof);

    }

    public function getTemplateName()
    {
        return "CdiBundle:Periodique:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 110,  172 => 89,  166 => 88,  143 => 70,  137 => 67,  133 => 66,  120 => 57,  111 => 50,  104 => 47,  96 => 41,  92 => 40,  84 => 36,  78 => 35,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <style>*/
/*         table {*/
/*             margin-top: 20px;*/
/*         }*/
/* */
/*         i{*/
/*             margin-top: 20px;*/
/*             margin-bottom: 10px;*/
/*             font-size: 12px;*/
/*         }*/
/* */
/*         #periodiques-proposition{*/
/*             list-style: none;*/
/*             padding: 0;*/
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
/* {% block body %}*/
/*     <h2 class="fil_ariane"><a href="{{ path('administration') }}">Administration</a> > AJOUT D'UN PERIODIQUE</h2>*/
/*     <section class="section">*/
/* */
/*         <h4 style="margin: 0; text-transform: uppercase;">Nom du nouveau périodique :</h4>*/
/*         {{ form_start(form) }}*/
/*             {{ form_errors(form) }}*/
/* */
/*             <table>*/
/*                 <tr>*/
/*                     <td>*/
/*                         {# Nom du périodique #}*/
/*                         {{ form_label(form.nom, "Nom du périodique :") }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ form_widget(form.nom, {'attr': {'placeholder': 'Nom'}}) }}*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         <br/>*/
/*                         {# Submit button #}*/
/*                         {{ form_widget(form.ajout, {'label': 'Enregistrer le périodique'}) }}*/
/*                     </td>*/
/*                 </tr>*/
/*             </table>*/
/*             <i></i>*/
/*             <ul id="periodiques-proposition">*/
/* */
/*             </ul>*/
/* */
/*             {{ form_rest(form) }}*/
/*         {{ form_end(form) }}*/
/*     </section>*/
/* */
/*   <!--  <h2 class="fil_ariane"><a href="{{ path('administration') }}">Administration</a> > Ajout d'un article > Périodique de l'article</h2>*/
/*     <section class="section">*/
/*         <h4 style="margin: 0; text-transform: uppercase;">Périodique du nouvel article :</h4>*/
/*         <p style="font-size: 13px;">Saisissez le nom du périodique de votre nouvel article. Si le périodique est déjà présent en base de données, cliquez sûr son nom dans la liste et validez. Sinon il sera automatiquement ajouté. </p>*/
/* */
/*         <form action="#" method="post" style="margin-top: 30px">*/
/*             <input type="text" name="nom" placeholder="Nom du périodique" id="form.nom" autocomplete="off"/>*/
/*             <input type="submit" value="Suivant >" style="float: right;">*/
/*         </form>*/
/* */
/*         <i></i>*/
/*         <ul id="periodiques-proposition">*/
/* */
/*         </ul>*/
/*     </section> -->*/
/* {% endblock %}*/
/* */
/* */
/* {% block javascripts %}*/
/*     <script type="text/javascript">*/
/*         $(function(){*/
/*             // On cache les div de proposition*/
/*             $('i').css("display", "none");*/
/*             $('#periodiques-proposition').css("display", "none");*/
/* */
/* */
/*             // Listener des changements de nom/prenom*/
/*             $('#form_nom').on('input', function(){*/
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
/*                         } else {*/
/*                           alert("Votre code existe deja merci de ne pas l'ajouté");*/
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
/*                                 $('#form_nom').val(choix);*/
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
/* {% endblock %}*/
/* */
