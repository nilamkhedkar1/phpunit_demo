<?php

/* uploadBundle:Default:home.html.twig */
class __TwigTemplate_64a781a5314b12d54e4549cb8d86c1c1703a3f2fbbff93d15c9e983b5bec3a73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7539d4bbc420d1550ccff69dd8bf0ba6c4f6adc345e1959ce710e5a91d3f2f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7539d4bbc420d1550ccff69dd8bf0ba6c4f6adc345e1959ce710e5a91d3f2f8->enter($__internal_f7539d4bbc420d1550ccff69dd8bf0ba6c4f6adc345e1959ce710e5a91d3f2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "uploadBundle:Default:home.html.twig"));

        // line 1
        $this->loadTemplate("uploadBundle:Default:header.html.twig", "uploadBundle:Default:home.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 35
        $this->loadTemplate("uploadBundle:Default:footer.html.twig", "uploadBundle:Default:home.html.twig", 35)->display($context);
        
        $__internal_f7539d4bbc420d1550ccff69dd8bf0ba6c4f6adc345e1959ce710e5a91d3f2f8->leave($__internal_f7539d4bbc420d1550ccff69dd8bf0ba6c4f6adc345e1959ce710e5a91d3f2f8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d59e0cf7ef5c142f401392b239a4f8315bfca371fa5b6e903cd24988b02fcd97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59e0cf7ef5c142f401392b239a4f8315bfca371fa5b6e903cd24988b02fcd97->enter($__internal_d59e0cf7ef5c142f401392b239a4f8315bfca371fa5b6e903cd24988b02fcd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "     <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
   
    <style>
        .form-style-10{
            width: 60%;
        }
        .paragraph {    
            font-family: initial;
            font-style: italic;
            text-align: justify;
        }
     </style>   
    <div class=\"form-style-10\">
        <h1>Home<span></span></h1>
 <span class=\"paragraph\">
<h4>What is Lorem Ipsum? </h4>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</span>
 <span class=\"paragraph\">  <h3>Where does it come from?</h3>

Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.
</span>
 <span class=\"paragraph\">
<h3>Why do we use it?</h3>
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
</span> 
 <span class=\"paragraph\"><h3>Where can I get some?</h3>

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span>
</div>   
";
        
        $__internal_d59e0cf7ef5c142f401392b239a4f8315bfca371fa5b6e903cd24988b02fcd97->leave($__internal_d59e0cf7ef5c142f401392b239a4f8315bfca371fa5b6e903cd24988b02fcd97_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_9ffe003c9d45342bf136e9a5c595bd6076008661f20bc06be78418f618036dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ffe003c9d45342bf136e9a5c595bd6076008661f20bc06be78418f618036dfb->enter($__internal_9ffe003c9d45342bf136e9a5c595bd6076008661f20bc06be78418f618036dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony PHPUnit Demo| Home Page";
        
        $__internal_9ffe003c9d45342bf136e9a5c595bd6076008661f20bc06be78418f618036dfb->leave($__internal_9ffe003c9d45342bf136e9a5c595bd6076008661f20bc06be78418f618036dfb_prof);

    }

    public function getTemplateName()
    {
        return "uploadBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  38 => 3,  31 => 35,  29 => 3,  26 => 2,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'uploadBundle:Default:header.html.twig' %}

{% block body %}
     <title>{% block title %}Symfony PHPUnit Demo| Home Page{% endblock %}</title>
   
    <style>
        .form-style-10{
            width: 60%;
        }
        .paragraph {    
            font-family: initial;
            font-style: italic;
            text-align: justify;
        }
     </style>   
    <div class=\"form-style-10\">
        <h1>Home<span></span></h1>
 <span class=\"paragraph\">
<h4>What is Lorem Ipsum? </h4>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</span>
 <span class=\"paragraph\">  <h3>Where does it come from?</h3>

Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.
</span>
 <span class=\"paragraph\">
<h3>Why do we use it?</h3>
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
</span> 
 <span class=\"paragraph\"><h3>Where can I get some?</h3>

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span>
</div>   
{% endblock %}
{% include 'uploadBundle:Default:footer.html.twig' %}", "uploadBundle:Default:home.html.twig", "/var/www/html/newupload_new/src/uploadBundle/Resources/views/Default/home.html.twig");
    }
}
