<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e45d4adf5b05e6cb14e32dded5a020c2dd7a861afd2f3a2fc18b2d3a4c0418bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9aa4177b6c64a7e7996e7c109454527c5fe936ec6c4e5f1d2e3176d3bb39e3f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa4177b6c64a7e7996e7c109454527c5fe936ec6c4e5f1d2e3176d3bb39e3f8->enter($__internal_9aa4177b6c64a7e7996e7c109454527c5fe936ec6c4e5f1d2e3176d3bb39e3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9aa4177b6c64a7e7996e7c109454527c5fe936ec6c4e5f1d2e3176d3bb39e3f8->leave($__internal_9aa4177b6c64a7e7996e7c109454527c5fe936ec6c4e5f1d2e3176d3bb39e3f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b56db76027204f22d8313f170095e37c932fb47038cbbf1bbca047eca2887d81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56db76027204f22d8313f170095e37c932fb47038cbbf1bbca047eca2887d81->enter($__internal_b56db76027204f22d8313f170095e37c932fb47038cbbf1bbca047eca2887d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b56db76027204f22d8313f170095e37c932fb47038cbbf1bbca047eca2887d81->leave($__internal_b56db76027204f22d8313f170095e37c932fb47038cbbf1bbca047eca2887d81_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_094537ec736698a382d819dc1efab457c11819cb846639ca9714967264f5d560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_094537ec736698a382d819dc1efab457c11819cb846639ca9714967264f5d560->enter($__internal_094537ec736698a382d819dc1efab457c11819cb846639ca9714967264f5d560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_094537ec736698a382d819dc1efab457c11819cb846639ca9714967264f5d560->leave($__internal_094537ec736698a382d819dc1efab457c11819cb846639ca9714967264f5d560_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_45b4906af4bfa0b8bd170478cdfc13e010ebbc2f42d5f8f543ddfd0feedad3e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b4906af4bfa0b8bd170478cdfc13e010ebbc2f42d5f8f543ddfd0feedad3e0->enter($__internal_45b4906af4bfa0b8bd170478cdfc13e010ebbc2f42d5f8f543ddfd0feedad3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_45b4906af4bfa0b8bd170478cdfc13e010ebbc2f42d5f8f543ddfd0feedad3e0->leave($__internal_45b4906af4bfa0b8bd170478cdfc13e010ebbc2f42d5f8f543ddfd0feedad3e0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/newupload_new/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
