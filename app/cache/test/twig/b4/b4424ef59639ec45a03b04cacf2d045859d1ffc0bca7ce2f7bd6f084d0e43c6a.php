<?php

/* uploadBundle:Default:footer.html.twig */
class __TwigTemplate_c2e3120234afd360e8c941bf8220a608f6677b3dbad171b7336e3cd8f5a35783 extends Twig_Template
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
        $__internal_9c39b06c4946361d1e901174645eb9a48ae6d83eed378a57ec89b5ada30ff361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c39b06c4946361d1e901174645eb9a48ae6d83eed378a57ec89b5ada30ff361->enter($__internal_9c39b06c4946361d1e901174645eb9a48ae6d83eed378a57ec89b5ada30ff361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "uploadBundle:Default:footer.html.twig"));

        // line 1
        echo "<div class = \"footer\"></div>
</body>
</html>";
        
        $__internal_9c39b06c4946361d1e901174645eb9a48ae6d83eed378a57ec89b5ada30ff361->leave($__internal_9c39b06c4946361d1e901174645eb9a48ae6d83eed378a57ec89b5ada30ff361_prof);

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
