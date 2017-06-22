<?php

/* uploadBundle:Default:footer.html.twig */
class __TwigTemplate_2884c8d3cad9b69e6bb1ce91ef511601f758705dbe3fa23eaea858427b649928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_734821cc225c318b056ff05224319f905f5e8047449390c30cdc2aef1ca9e8b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734821cc225c318b056ff05224319f905f5e8047449390c30cdc2aef1ca9e8b2->enter($__internal_734821cc225c318b056ff05224319f905f5e8047449390c30cdc2aef1ca9e8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "uploadBundle:Default:footer.html.twig"));

        // line 1
        echo "<div class = \"footer\"></div>
</body>
</html>";
        
        $__internal_734821cc225c318b056ff05224319f905f5e8047449390c30cdc2aef1ca9e8b2->leave($__internal_734821cc225c318b056ff05224319f905f5e8047449390c30cdc2aef1ca9e8b2_prof);

    }

    public function getTemplateName()
    {
        return "uploadBundle:Default:footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class = \"footer\"></div>
</body>
</html>", "uploadBundle:Default:footer.html.twig", "/var/www/html/newupload_new/src/uploadBundle/Resources/views/Default/footer.html.twig");
    }
}
