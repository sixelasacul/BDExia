<?php

/* MainBundle:Activites:photos.html.twig */
class __TwigTemplate_eb7e6a2b8b2b843c79d0d22cac8029ace72c878c919ef30a241410722fdd9a97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::base.html.twig", "MainBundle:Activites:photos.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navActivites' => array($this, 'block_navActivites'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1548acf943e85c4dfe706dc1a9b8eeebb44f49b863d5d1e7d7a0ce1c3e431534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1548acf943e85c4dfe706dc1a9b8eeebb44f49b863d5d1e7d7a0ce1c3e431534->enter($__internal_1548acf943e85c4dfe706dc1a9b8eeebb44f49b863d5d1e7d7a0ce1c3e431534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:photos.html.twig"));

        $__internal_cb15e12a139abaa771b990fbcf9c4b193b3b99ff8bfb475b8822fae38bd5de9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb15e12a139abaa771b990fbcf9c4b193b3b99ff8bfb475b8822fae38bd5de9b->enter($__internal_cb15e12a139abaa771b990fbcf9c4b193b3b99ff8bfb475b8822fae38bd5de9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Activites:photos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1548acf943e85c4dfe706dc1a9b8eeebb44f49b863d5d1e7d7a0ce1c3e431534->leave($__internal_1548acf943e85c4dfe706dc1a9b8eeebb44f49b863d5d1e7d7a0ce1c3e431534_prof);

        
        $__internal_cb15e12a139abaa771b990fbcf9c4b193b3b99ff8bfb475b8822fae38bd5de9b->leave($__internal_cb15e12a139abaa771b990fbcf9c4b193b3b99ff8bfb475b8822fae38bd5de9b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc10e4ae510df6e140b493fb87d1d32b12ad4e3a9916db0531b2298475fe8e02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc10e4ae510df6e140b493fb87d1d32b12ad4e3a9916db0531b2298475fe8e02->enter($__internal_dc10e4ae510df6e140b493fb87d1d32b12ad4e3a9916db0531b2298475fe8e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_77e809428db142b0899cd8b395e84b98a4af7f7450d9a7e6508c352e164d6098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e809428db142b0899cd8b395e84b98a4af7f7450d9a7e6508c352e164d6098->enter($__internal_77e809428db142b0899cd8b395e84b98a4af7f7450d9a7e6508c352e164d6098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Activité";
        
        $__internal_77e809428db142b0899cd8b395e84b98a4af7f7450d9a7e6508c352e164d6098->leave($__internal_77e809428db142b0899cd8b395e84b98a4af7f7450d9a7e6508c352e164d6098_prof);

        
        $__internal_dc10e4ae510df6e140b493fb87d1d32b12ad4e3a9916db0531b2298475fe8e02->leave($__internal_dc10e4ae510df6e140b493fb87d1d32b12ad4e3a9916db0531b2298475fe8e02_prof);

    }

    // line 5
    public function block_navActivites($context, array $blocks = array())
    {
        $__internal_6696aab37b1426d2a21d7739799eb32e725325eebb881b8626e642faa9acd259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6696aab37b1426d2a21d7739799eb32e725325eebb881b8626e642faa9acd259->enter($__internal_6696aab37b1426d2a21d7739799eb32e725325eebb881b8626e642faa9acd259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        $__internal_46358bf45c5aa7aa57dbeb690d86edcd2f3e280ded3a953be02c5ec33bb56961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46358bf45c5aa7aa57dbeb690d86edcd2f3e280ded3a953be02c5ec33bb56961->enter($__internal_46358bf45c5aa7aa57dbeb690d86edcd2f3e280ded3a953be02c5ec33bb56961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navActivites"));

        echo "class=\"active\"";
        
        $__internal_46358bf45c5aa7aa57dbeb690d86edcd2f3e280ded3a953be02c5ec33bb56961->leave($__internal_46358bf45c5aa7aa57dbeb690d86edcd2f3e280ded3a953be02c5ec33bb56961_prof);

        
        $__internal_6696aab37b1426d2a21d7739799eb32e725325eebb881b8626e642faa9acd259->leave($__internal_6696aab37b1426d2a21d7739799eb32e725325eebb881b8626e642faa9acd259_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e77baa07c39d4f1120995662124b0f8f1ae08e0499db4b96ca6c907438ad8ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e77baa07c39d4f1120995662124b0f8f1ae08e0499db4b96ca6c907438ad8ff->enter($__internal_2e77baa07c39d4f1120995662124b0f8f1ae08e0499db4b96ca6c907438ad8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f6c9eb78d1d3a2b792374eb961183cb763817b611f26256e9128fa8ead2713d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6c9eb78d1d3a2b792374eb961183cb763817b611f26256e9128fa8ead2713d->enter($__internal_0f6c9eb78d1d3a2b792374eb961183cb763817b611f26256e9128fa8ead2713d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<main>
    <div class=\"container\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 12
            echo "            <div class=\"row photos\">
                    <img class=\"col col-md-7\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/") . $this->getAttribute($context["img"], "chemin", array())), "html", null, true);
            echo "\" alt=\"photo_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "idActivite", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "prenom", array()) . $this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "nom", array())), "html", null, true);
            echo "\">
                    <div class=\"photo-details col-md-5\">
                        <div class=\"auteur-photo\">
                            <img class=\"avatar-comm\" src=\"";
            // line 16
            if (($this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "avatarUser", array()) != null)) {
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/") . $this->getAttribute($this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "avatarUser", array()), "chemin", array())), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.jpg"), "html", null, true);
            }
            echo "\" alt=\"avatar_";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "prenom", array()) . $this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "nom", array())), "html", null, true);
            echo "\">
                            <h2>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["img"], "auteurImg", array()), "nom", array()), "html", null, true);
            echo "</h2>
                        </div>
                            <div class=\"photo-commentaire\">
                        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["coms"]) ? $context["coms"] : $this->getContext($context, "coms")));
            foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
                if (($this->getAttribute($this->getAttribute($context["com"], "imgComm", array()), "idImg", array()) == $this->getAttribute($context["img"], "idImg", array()))) {
                    // line 21
                    echo "                            <div>
                                <img class=\"avatar-comm\" src=\"";
                    // line 22
                    if (($this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "avatarUser", array()) != null)) {
                        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/") . $this->getAttribute($this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "avatarUser", array()), "chemin", array())), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.jpg"), "html", null, true);
                    }
                    echo "\" alt=\"avatar_";
                    echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "prenom", array()) . $this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "nom", array())), "html", null, true);
                    echo "\">
                                ";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "prenom", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "auteurComm", array()), "nom", array()), "html", null, true);
                    echo "<br>
                                <p class=\"text-comm\">";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "commentaire", array()), "html", null, true);
                    echo "</p>
                            </div>
                        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                            <div>
                                <form action=\"\" method=\"post\">
                                    <div class=\"input-group\">
                                        <input type=\"hidden\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["img"], "idImg", array()), "html", null, true);
            echo "\" name=\"idImg\">
                                        <textarea class=\"form-control\" name=\"Commentaire\"></textarea>
                                        <div class=\"input-group-btn\">
                                            <button class=\"btn btn-default\" type=\"submit\" name=\"submitComm\" value=\"Envoyer\">
                                                <i class=\"fa fa-paper-plane\"></i>
                                            </button>
                                            <button class=\"btn btn-default\" type=\"submit\" name=\"likePhoto\" value=\"Envoyer\">
                                                <i class=\"fa fa-heart\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    </div>
    <div class=\"espaceBas\"></div>
</main>
";
        
        $__internal_0f6c9eb78d1d3a2b792374eb961183cb763817b611f26256e9128fa8ead2713d->leave($__internal_0f6c9eb78d1d3a2b792374eb961183cb763817b611f26256e9128fa8ead2713d_prof);

        
        $__internal_2e77baa07c39d4f1120995662124b0f8f1ae08e0499db4b96ca6c907438ad8ff->leave($__internal_2e77baa07c39d4f1120995662124b0f8f1ae08e0499db4b96ca6c907438ad8ff_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Activites:photos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 47,  166 => 30,  161 => 27,  151 => 24,  145 => 23,  135 => 22,  132 => 21,  127 => 20,  119 => 17,  109 => 16,  99 => 13,  96 => 12,  92 => 11,  87 => 8,  78 => 7,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MainBundle::base.html.twig\" %}

{% block title %}Activité{% endblock %}

{% block navActivites %}class=\"active\"{% endblock %}

{% block body %}

<main>
    <div class=\"container\">
        {% for img in list %}
            <div class=\"row photos\">
                    <img class=\"col col-md-7\" src=\"{{ asset('img/') ~ img.chemin}}\" alt=\"photo_{{act.idActivite}}_{{img.auteurImg.prenom ~ img.auteurImg.nom}}\">
                    <div class=\"photo-details col-md-5\">
                        <div class=\"auteur-photo\">
                            <img class=\"avatar-comm\" src=\"{% if img.auteurImg.avatarUser != NULL %}{{ asset('img/') ~ img.auteurImg.avatarUser.chemin}}{% else %}{{asset('img/avatar.jpg')}}{% endif %}\" alt=\"avatar_{{img.auteurImg.prenom ~ img.auteurImg.nom}}\">
                            <h2>{{img.auteurImg.prenom}} {{img.auteurImg.nom}}</h2>
                        </div>
                            <div class=\"photo-commentaire\">
                        {% for com in coms if com.imgComm.idImg == img.idImg %}
                            <div>
                                <img class=\"avatar-comm\" src=\"{% if com.auteurComm.avatarUser != NULL %}{{ asset('img/') ~ com.auteurComm.avatarUser.chemin}}{% else %}{{asset('img/avatar.jpg')}}{% endif %}\" alt=\"avatar_{{com.auteurComm.prenom ~ com.auteurComm.nom}}\">
                                {{com.auteurComm.prenom}} {{com.auteurComm.nom}}<br>
                                <p class=\"text-comm\">{{com.commentaire}}</p>
                            </div>
                        {% endfor %}
                            <div>
                                <form action=\"\" method=\"post\">
                                    <div class=\"input-group\">
                                        <input type=\"hidden\" value=\"{{img.idImg}}\" name=\"idImg\">
                                        <textarea class=\"form-control\" name=\"Commentaire\"></textarea>
                                        <div class=\"input-group-btn\">
                                            <button class=\"btn btn-default\" type=\"submit\" name=\"submitComm\" value=\"Envoyer\">
                                                <i class=\"fa fa-paper-plane\"></i>
                                            </button>
                                            <button class=\"btn btn-default\" type=\"submit\" name=\"likePhoto\" value=\"Envoyer\">
                                                <i class=\"fa fa-heart\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        {% endfor %}
    </div>
    <div class=\"espaceBas\"></div>
</main>
{% endblock %}", "MainBundle:Activites:photos.html.twig", "C:\\wamp64\\www\\bdexia\\src\\MainBundle/Resources/views/Activites/photos.html.twig");
    }
}