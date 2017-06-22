<?php

/* uploadBundle:Default:index.html.twig */
class __TwigTemplate_77c9f390c95c1e9dedc741683a766657e7c1e8bc8c26cfefe16df52522a73833 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_549d890d76c292683e1c59eeffc26056f9c8076434034c0ee4a3633195319db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549d890d76c292683e1c59eeffc26056f9c8076434034c0ee4a3633195319db2->enter($__internal_549d890d76c292683e1c59eeffc26056f9c8076434034c0ee4a3633195319db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "uploadBundle:Default:index.html.twig"));

        // line 1
        $this->loadTemplate("uploadBundle:Default:header.html.twig", "uploadBundle:Default:index.html.twig", 1)->display($context);
        // line 2
        echo "  <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 134
        $this->loadTemplate("uploadBundle:Default:footer.html.twig", "uploadBundle:Default:index.html.twig", 134)->display($context);
        
        $__internal_549d890d76c292683e1c59eeffc26056f9c8076434034c0ee4a3633195319db2->leave($__internal_549d890d76c292683e1c59eeffc26056f9c8076434034c0ee4a3633195319db2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_350e934903237c4594c5b4398395b552a01b7206c099b39e9bc5d9621c8f1fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_350e934903237c4594c5b4398395b552a01b7206c099b39e9bc5d9621c8f1fc6->enter($__internal_350e934903237c4594c5b4398395b552a01b7206c099b39e9bc5d9621c8f1fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Heroku Demo| Sign Up";
        
        $__internal_350e934903237c4594c5b4398395b552a01b7206c099b39e9bc5d9621c8f1fc6->leave($__internal_350e934903237c4594c5b4398395b552a01b7206c099b39e9bc5d9621c8f1fc6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2886a3ff0c301dafcbfd8b891a4f3487b4fa375c1c5ed6d3ec49721ec5d98cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2886a3ff0c301dafcbfd8b891a4f3487b4fa375c1c5ed6d3ec49721ec5d98cbe->enter($__internal_2886a3ff0c301dafcbfd8b891a4f3487b4fa375c1c5ed6d3ec49721ec5d98cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <style>
         .previous {
                background: #2aad89;
               padding: 8px 20px 8px 20px;
               border-radius: 5px;
               -webkit-border-radius: 5px;
               -moz-border-radius: 5px;
               color: #fff;
               text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
               font: normal 30px 'Bitter', serif;
               -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
               -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
               box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
               border: 1px solid #257C9E;
               font-size: 15px;
        }
     </style>   
    <script type=\"text/javascript\">
        function validateForm() {

            //alert(\$('input[type=\"file\"]').val());
            var fName = \$(\"#first_name\").val();
            var lName = \$(\"#last_name\").val();
            var address = \$(\"#address\").val();
            var addresstwo = \$(\"#addresstwo\").val();
            var email = \$(\"#email\").val();
            var filechk = document.getElementById(\"fileinfo\").files.length;

            var phone = \$(\"#phone\").val();
            var atpos = email.indexOf(\"@\");
            var dotpos = email.lastIndexOf(\".\");
            if (fName == \"\") {
                alert(\"Please enter the First Name\");
                return false;
            }
            if (lName == \"\") {
                alert(\"Please enter the Last Name\");
                return false;
            }
            if (address == \"\") {
                alert(\"Please enter the address\");
                return false;
            }
            if (addresstwo == \"\") {
                alert(\"Please enter the address\");
                return false;
            }
            if (filechk == 0) {
                alert(\"Please select file\");
                return false;
            }
            if (phone == \"\") {
                alert(\"Please enter the Phone Number\");
                return false;
            }
            if (isNaN(phone)) {
                alert(\"Must input numbers\");
                return false;
            }
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                alert(\"Not a valid e-mail address\");
                return false;
            }

        }

        function AlertFilesize(cid, sz, a) {

            var controllerID = cid;
            var fileSize = sz;
            var extation = a;
            if (window.ActiveXObject) {
                var fso = new ActiveXObject(\"Scripting.FileSystemObject\");
                var filepath = document.getElementById('fileinfo').value;
                var thefile = fso.getFile(filepath);
                var sizeinbytes = thefile.size;
            } else {
                var sizeinbytes = document.getElementById('fileinfo').files[0].size;
            }
            var fSExt = new Array('Bytes', 'KB', 'MB', 'GB');
            fSize = sizeinbytes;
            i = 0;
            while (fSize > 900) {
                fSize /= 1024;
                i++;
            }
            var fup = document.getElementById('fileinfo');
            var fileName = fup.value;
            var ext = fileName.substring(fileName.lastIndexOf('.') + 1);

            if (ext == \"gif\" || ext == \"GIF\" || ext == \"JPEG\" || ext == \"jpeg\" || ext == \"jpg\" || ext == \"JPG\" || ext == \"png\" || ext == \"PNG\")
            {
                var fs = Math.round(fSize);
                if (fs < fileSize && fSExt[i] == extation)
                {
                    //alert(\"Image Successfully Uploaded\");
                    return true;
                } else {
                    alert(\"Please enter the image size less then\" + fileSize + extation);
                    document.getElementById('fileinfo').value = '';
                    return false;
                }
            } else {
                alert(\"Must be jpg and gif images ONLY\");
                document.getElementById('fileinfo').value = '';
                return false;
            }
        }
    </script>
    <div class=\"form-style-10\">
        <h1>Sign Up Now!<span></span></h1>
        <form id=\"addBook\" method=\"post\" class=\"form\" name=\"add\" role=\"form\" enctype=\"multipart/form-data\" onsubmit=\"return validateForm()\" >

            <div class=\"inner-wrap\">
                <label>First Name <input type=\"text\" class=\"\"  id=\"first_name\" name=\"first_name\"></label>
                <label>Last Name <input type=\"text\" class=\"\"  id=\"last_name\" name=\"last_name\"></label>
                <label>Address One <input type=\"text\" class=\"\"  id=\"address\" name=\"address\"></label>
                <label>Address  Two<input type=\"text\" class=\"\"  id=\"addresstwo\" name=\"addresstwo\"></label>
                <label>Email <input type=\"text\" class=\"\"  id=\"email\" name=\"email\"> </label>
                <label>Upload File <input type=\"file\" class=\"\"  id=\"fileinfo\" name=\"file\" onchange=\"AlertFilesize(this.id, 100, 'KB');\" ></label>
                <label>Phone  <input type=\"text\" class=\"\"  id=\"phone\" name=\"phone\"></label>

            </div>
            <div class=\"button-section\">
               <a href=\"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("upload_view");
        echo "\" class=\"previous\">Go To View Page</a> <input type=\"submit\" name=\"Sign Up\" />
            </div>
        </form>
    </div>

";
        
        $__internal_2886a3ff0c301dafcbfd8b891a4f3487b4fa375c1c5ed6d3ec49721ec5d98cbe->leave($__internal_2886a3ff0c301dafcbfd8b891a4f3487b4fa375c1c5ed6d3ec49721ec5d98cbe_prof);

    }

    public function getTemplateName()
    {
        return "uploadBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 128,  58 => 4,  52 => 3,  40 => 2,  33 => 134,  31 => 3,  26 => 2,  24 => 1,);
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
  <title>{% block title %}Symfony Heroku Demo| Sign Up{% endblock %}</title>
{% block body %}
    <style>
         .previous {
                background: #2aad89;
               padding: 8px 20px 8px 20px;
               border-radius: 5px;
               -webkit-border-radius: 5px;
               -moz-border-radius: 5px;
               color: #fff;
               text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
               font: normal 30px 'Bitter', serif;
               -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
               -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
               box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
               border: 1px solid #257C9E;
               font-size: 15px;
        }
     </style>   
    <script type=\"text/javascript\">
        function validateForm() {

            //alert(\$('input[type=\"file\"]').val());
            var fName = \$(\"#first_name\").val();
            var lName = \$(\"#last_name\").val();
            var address = \$(\"#address\").val();
            var addresstwo = \$(\"#addresstwo\").val();
            var email = \$(\"#email\").val();
            var filechk = document.getElementById(\"fileinfo\").files.length;

            var phone = \$(\"#phone\").val();
            var atpos = email.indexOf(\"@\");
            var dotpos = email.lastIndexOf(\".\");
            if (fName == \"\") {
                alert(\"Please enter the First Name\");
                return false;
            }
            if (lName == \"\") {
                alert(\"Please enter the Last Name\");
                return false;
            }
            if (address == \"\") {
                alert(\"Please enter the address\");
                return false;
            }
            if (addresstwo == \"\") {
                alert(\"Please enter the address\");
                return false;
            }
            if (filechk == 0) {
                alert(\"Please select file\");
                return false;
            }
            if (phone == \"\") {
                alert(\"Please enter the Phone Number\");
                return false;
            }
            if (isNaN(phone)) {
                alert(\"Must input numbers\");
                return false;
            }
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                alert(\"Not a valid e-mail address\");
                return false;
            }

        }

        function AlertFilesize(cid, sz, a) {

            var controllerID = cid;
            var fileSize = sz;
            var extation = a;
            if (window.ActiveXObject) {
                var fso = new ActiveXObject(\"Scripting.FileSystemObject\");
                var filepath = document.getElementById('fileinfo').value;
                var thefile = fso.getFile(filepath);
                var sizeinbytes = thefile.size;
            } else {
                var sizeinbytes = document.getElementById('fileinfo').files[0].size;
            }
            var fSExt = new Array('Bytes', 'KB', 'MB', 'GB');
            fSize = sizeinbytes;
            i = 0;
            while (fSize > 900) {
                fSize /= 1024;
                i++;
            }
            var fup = document.getElementById('fileinfo');
            var fileName = fup.value;
            var ext = fileName.substring(fileName.lastIndexOf('.') + 1);

            if (ext == \"gif\" || ext == \"GIF\" || ext == \"JPEG\" || ext == \"jpeg\" || ext == \"jpg\" || ext == \"JPG\" || ext == \"png\" || ext == \"PNG\")
            {
                var fs = Math.round(fSize);
                if (fs < fileSize && fSExt[i] == extation)
                {
                    //alert(\"Image Successfully Uploaded\");
                    return true;
                } else {
                    alert(\"Please enter the image size less then\" + fileSize + extation);
                    document.getElementById('fileinfo').value = '';
                    return false;
                }
            } else {
                alert(\"Must be jpg and gif images ONLY\");
                document.getElementById('fileinfo').value = '';
                return false;
            }
        }
    </script>
    <div class=\"form-style-10\">
        <h1>Sign Up Now!<span></span></h1>
        <form id=\"addBook\" method=\"post\" class=\"form\" name=\"add\" role=\"form\" enctype=\"multipart/form-data\" onsubmit=\"return validateForm()\" >

            <div class=\"inner-wrap\">
                <label>First Name <input type=\"text\" class=\"\"  id=\"first_name\" name=\"first_name\"></label>
                <label>Last Name <input type=\"text\" class=\"\"  id=\"last_name\" name=\"last_name\"></label>
                <label>Address One <input type=\"text\" class=\"\"  id=\"address\" name=\"address\"></label>
                <label>Address  Two<input type=\"text\" class=\"\"  id=\"addresstwo\" name=\"addresstwo\"></label>
                <label>Email <input type=\"text\" class=\"\"  id=\"email\" name=\"email\"> </label>
                <label>Upload File <input type=\"file\" class=\"\"  id=\"fileinfo\" name=\"file\" onchange=\"AlertFilesize(this.id, 100, 'KB');\" ></label>
                <label>Phone  <input type=\"text\" class=\"\"  id=\"phone\" name=\"phone\"></label>

            </div>
            <div class=\"button-section\">
               <a href=\"{{path('upload_view')}}\" class=\"previous\">Go To View Page</a> <input type=\"submit\" name=\"Sign Up\" />
            </div>
        </form>
    </div>

{% endblock %}
{% include 'uploadBundle:Default:footer.html.twig' %}
", "uploadBundle:Default:index.html.twig", "/var/www/html/newupload_new/src/uploadBundle/Resources/views/Default/index.html.twig");
    }
}
