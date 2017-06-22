<?php

/* uploadBundle:Default:edit.html.twig */
class __TwigTemplate_2b1fc5a7efe9eb724f913dbb319c5aff2949d10a0197023314c5f51df5ff5337 extends Twig_Template
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
        $__internal_1a2dd148d30fb36d2e8c99e28429d735324feecd27d9b3dba0d6e38543dc4836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2dd148d30fb36d2e8c99e28429d735324feecd27d9b3dba0d6e38543dc4836->enter($__internal_1a2dd148d30fb36d2e8c99e28429d735324feecd27d9b3dba0d6e38543dc4836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "uploadBundle:Default:edit.html.twig"));

        // line 1
        $this->loadTemplate("uploadBundle:Default:header.html.twig", "uploadBundle:Default:edit.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 154
        $this->loadTemplate("uploadBundle:Default:footer.html.twig", "uploadBundle:Default:edit.html.twig", 154)->display($context);
        
        $__internal_1a2dd148d30fb36d2e8c99e28429d735324feecd27d9b3dba0d6e38543dc4836->leave($__internal_1a2dd148d30fb36d2e8c99e28429d735324feecd27d9b3dba0d6e38543dc4836_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2f2fb834c90ea0eea750462d17b6365d2bb2197dac6c40f1c05a2af08e2d31e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f2fb834c90ea0eea750462d17b6365d2bb2197dac6c40f1c05a2af08e2d31e->enter($__internal_c2f2fb834c90ea0eea750462d17b6365d2bb2197dac6c40f1c05a2af08e2d31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <style>
        .form-style-10{
                width: 600px !important;
        }
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
           // var filechk = document.getElementById(\"fileinfo\").files.length;

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
            ";
        // line 60
        echo "            if (phone == \"\") {
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
                   // alert(\"Image Successfully Uploaded\");
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
        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                \$('#uploadedimage')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>
    <div class=\"form-style-10\">
        <h1>Update Details<span> </span></h1>
        <form id=\"addBook\" method=\"post\" class=\"form\" role=\"form\" enctype=\"multipart/form-data\" onsubmit=\"return validateForm()\">

            <div class=\"inner-wrap\">
                <label>First Name <input value=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "firstName", array()), "html", null, true);
        echo "\" type=\"text\" class=\"\"  id=\"first_name\" name=\"first_name\"></label>
                <label>Last Name <input value=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "lastName", array()), "html", null, true);
        echo "\" type=\"text\" class=\"\"  id=\"first_name\" name=\"last_name\"></label>
                <label>Address  one<input value=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "address", array()), "html", null, true);
        echo "\" type=\"text\" class=\"\"  id=\"address\" name=\"address\"></label>
                <label>Address  two<input value=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "addresstwo", array()), "html", null, true);
        echo "\" type=\"text\" class=\"\"  id=\"addresstwo\" name=\"addresstwo\"></label>
                <label>Email <input value=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "email", array()), "html", null, true);
        echo "\" type=\"text\" class=\"\"  id=\"email\" name=\"email\"></label>
                <label>Upload File <input  value=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "file", array()), "html", null, true);
        echo "\" type=\"file\" class=\"\"  id=\"fileinfo\" name=\"file\"  onchange=\"readURL(this); AlertFilesize(this.id, 100, 'KB');\">  <img id=\"uploadedimage\" style=\"width: 200px; height: 200px;float: right;\" src=\"/uploads/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "file", array()), "html", null, true);
        echo "\"></label>
                
                
                <label>Phone  <input value=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "phone", array()), "html", null, true);
        echo "\" type=\"text\" class=\"\"  id=\"phone\" name=\"phone\"></label>
                <input value=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
        echo "\" type=\"hidden\" class=\"\"  id=\"id\" name=\"id\">
            </div>
            <div class=\"button-section\">
                <a href=\"";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("upload_view");
        echo "\" class=\"previous\">Go To View Page</a> <input type=\"submit\" name=\"Sign Up\" />
            </div>
        </form>
    </div>
";
        
        $__internal_c2f2fb834c90ea0eea750462d17b6365d2bb2197dac6c40f1c05a2af08e2d31e->leave($__internal_c2f2fb834c90ea0eea750462d17b6365d2bb2197dac6c40f1c05a2af08e2d31e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_66aa79d42c28a712bcb8ee1d6429912bca74f0319617e280ff16501ee8df3d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66aa79d42c28a712bcb8ee1d6429912bca74f0319617e280ff16501ee8df3d1b->enter($__internal_66aa79d42c28a712bcb8ee1d6429912bca74f0319617e280ff16501ee8df3d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony PHPUnit Demo| Edit User";
        
        $__internal_66aa79d42c28a712bcb8ee1d6429912bca74f0319617e280ff16501ee8df3d1b->leave($__internal_66aa79d42c28a712bcb8ee1d6429912bca74f0319617e280ff16501ee8df3d1b_prof);

    }

    public function getTemplateName()
    {
        return "uploadBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 4,  217 => 149,  211 => 146,  207 => 145,  199 => 142,  195 => 141,  191 => 140,  187 => 139,  183 => 138,  179 => 137,  100 => 60,  44 => 4,  38 => 3,  31 => 154,  29 => 3,  26 => 2,  24 => 1,);
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
    <title>{% block title %}Symfony PHPUnit Demo| Edit User{% endblock %}</title>
    <style>
        .form-style-10{
                width: 600px !important;
        }
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
           // var filechk = document.getElementById(\"fileinfo\").files.length;

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
            {#if (filechk == 0) {
                alert(\"Please select file\");
                return false;
            }#}
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
                   // alert(\"Image Successfully Uploaded\");
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
        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                \$('#uploadedimage')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>
    <div class=\"form-style-10\">
        <h1>Update Details<span> </span></h1>
        <form id=\"addBook\" method=\"post\" class=\"form\" role=\"form\" enctype=\"multipart/form-data\" onsubmit=\"return validateForm()\">

            <div class=\"inner-wrap\">
                <label>First Name <input value=\"{{data.firstName}}\" type=\"text\" class=\"\"  id=\"first_name\" name=\"first_name\"></label>
                <label>Last Name <input value=\"{{data.lastName}}\" type=\"text\" class=\"\"  id=\"first_name\" name=\"last_name\"></label>
                <label>Address  one<input value=\"{{data.address}}\" type=\"text\" class=\"\"  id=\"address\" name=\"address\"></label>
                <label>Address  two<input value=\"{{data.addresstwo}}\" type=\"text\" class=\"\"  id=\"addresstwo\" name=\"addresstwo\"></label>
                <label>Email <input value=\"{{data.email}}\" type=\"text\" class=\"\"  id=\"email\" name=\"email\"></label>
                <label>Upload File <input  value=\"{{data.file}}\" type=\"file\" class=\"\"  id=\"fileinfo\" name=\"file\"  onchange=\"readURL(this); AlertFilesize(this.id, 100, 'KB');\">  <img id=\"uploadedimage\" style=\"width: 200px; height: 200px;float: right;\" src=\"/uploads/{{data.file}}\"></label>
                
                
                <label>Phone  <input value=\"{{data.phone}}\" type=\"text\" class=\"\"  id=\"phone\" name=\"phone\"></label>
                <input value=\"{{data.id}}\" type=\"hidden\" class=\"\"  id=\"id\" name=\"id\">
            </div>
            <div class=\"button-section\">
                <a href=\"{{path('upload_view')}}\" class=\"previous\">Go To View Page</a> <input type=\"submit\" name=\"Sign Up\" />
            </div>
        </form>
    </div>
{% endblock %}
{% include 'uploadBundle:Default:footer.html.twig' %}", "uploadBundle:Default:edit.html.twig", "/var/www/html/newupload_new/src/uploadBundle/Resources/views/Default/edit.html.twig");
    }
}
