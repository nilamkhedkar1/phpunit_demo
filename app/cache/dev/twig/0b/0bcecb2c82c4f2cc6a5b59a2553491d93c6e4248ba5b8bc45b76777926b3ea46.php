<?php

/* uploadBundle:Default:footer.html.twig */
class __TwigTemplate_f563276e0759345a36ca4207e02d57fda9a280d00ce24dd1eb2e3c033cf0da60 extends Twig_Template
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
        $__internal_fe2899e70d1b33ff048d8737aef59fea2ca94a7eb243529270bd6de1152b2726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe2899e70d1b33ff048d8737aef59fea2ca94a7eb243529270bd6de1152b2726->enter($__internal_fe2899e70d1b33ff048d8737aef59fea2ca94a7eb243529270bd6de1152b2726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "uploadBundle:Default:footer.html.twig"));

        // line 1
        echo "<div class = \"footer\"></div>
</body>
</html>";
        
        $__internal_fe2899e70d1b33ff048d8737aef59fea2ca94a7eb243529270bd6de1152b2726->leave($__internal_fe2899e70d1b33ff048d8737aef59fea2ca94a7eb243529270bd6de1152b2726_prof);

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
