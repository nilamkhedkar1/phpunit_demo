<?php

/* uploadBundle:Default:view.html.twig */
class __TwigTemplate_651db845710741c41b065f08dbfe915cde8c5a46da05d0135f733c336bdfd7fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00005c9844506f8a33ef2aae7a3ab2e8f04275709b3299cb75bee4282b560acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00005c9844506f8a33ef2aae7a3ab2e8f04275709b3299cb75bee4282b560acc->enter($__internal_00005c9844506f8a33ef2aae7a3ab2e8f04275709b3299cb75bee4282b560acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "uploadBundle:Default:view.html.twig"));

        // line 1
        $this->loadTemplate("uploadBundle:Default:header.html.twig", "uploadBundle:Default:view.html.twig", 1)->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
        // line 82
        $this->loadTemplate("uploadBundle:Default:footer.html.twig", "uploadBundle:Default:view.html.twig", 82)->display($context);
        
        $__internal_00005c9844506f8a33ef2aae7a3ab2e8f04275709b3299cb75bee4282b560acc->leave($__internal_00005c9844506f8a33ef2aae7a3ab2e8f04275709b3299cb75bee4282b560acc_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f78677ebe4700887930716c67feb5bf45d81ed3db90b057f92586b968f8f07f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f78677ebe4700887930716c67feb5bf45d81ed3db90b057f92586b968f8f07f->enter($__internal_6f78677ebe4700887930716c67feb5bf45d81ed3db90b057f92586b968f8f07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <style>
          #users tr { text-align: left;}
          #users_length{ margin: 1% 13%;}
          #users_filter{ margin: 1% 13%;}
          .previous {
                background: #2aad89;
                padding: 0px 8px 6px 8px;
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
        #users_info { margin-left: 11%;}
        #users_paginate { margin-right: 12%;}
    </style> 
    <title>Symfony Heroku Demo| List User</title>
    <link rel=\"stylesheet\" href=\"//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css\"/>
    
    <script src=\"//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js\"></script>
    <div hight=\"20%\"></div>
   <body> 
    <table id=\"users\" class=\"display\" cellspacing=\"0\" width=\"85%\">
        <thead>
            <tr>
                
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Photo</th>
                <th>Phone</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["book_type"]) {
            // line 46
            echo "                <tr>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["book_type"], "firstName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["book_type"], "lastName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["book_type"], "address", array()), "html", null, true);
            echo " <br>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["book_type"], "addresstwo", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["book_type"], "email", array()), "html", null, true);
            echo "</td>
                    <td><img id=\"uploadedimage\" style=\"width: 50px; height: 50px;\" src=\"/uploads/";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["book_type"], "file", array()), "html", null, true);
            echo "\"></td>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["book_type"], "phone", array()), "html", null, true);
            echo "</td>
                    <td><a class=\"alink previous\" title=\"Edit User\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("upload_edit", array("id" => $this->getAttribute($context["book_type"], "id", array()))), "html", null, true);
            echo "\" >Edit</a>  <a class=\"alink previous\" title=\"View User\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("upload_viewuser", array("id" => $this->getAttribute($context["book_type"], "id", array()))), "html", null, true);
            echo "\" >View</a>  <a class=\"alink previous\"  title=\"Remove User\" onclick=\"fnRemoveContent(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["book_type"], "id", array()), "html", null, true);
            echo ");\" href=\"#\">Delete</a></td>
                
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('#users').DataTable({
                \"ordering\": false,
                 //\"order\": [[ 0, \"desc\" ]]
            });
        });
        
        function fnRemoveContent(id){
            if (confirm(\"Are you sure you want to delete?\")) {
                \$.ajax({        
                    url: '";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("upload_delete");
        echo "',
                    type: 'post',             
                    data: {'id' : id},
                    success: function(response) {
                        window.location.reload();
                    }           
                });
            }
        }
    </script>
    </body>
";
        
        $__internal_6f78677ebe4700887930716c67feb5bf45d81ed3db90b057f92586b968f8f07f->leave($__internal_6f78677ebe4700887930716c67feb5bf45d81ed3db90b057f92586b968f8f07f_prof);

    }

    public function getTemplateName()
    {
        return "uploadBundle:Default:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 70,  131 => 57,  117 => 53,  113 => 52,  109 => 51,  105 => 50,  99 => 49,  95 => 48,  91 => 47,  88 => 46,  84 => 45,  40 => 3,  34 => 2,  27 => 82,  25 => 2,  23 => 1,);
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
    <style>
          #users tr { text-align: left;}
          #users_length{ margin: 1% 13%;}
          #users_filter{ margin: 1% 13%;}
          .previous {
                background: #2aad89;
                padding: 0px 8px 6px 8px;
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
        #users_info { margin-left: 11%;}
        #users_paginate { margin-right: 12%;}
    </style> 
    <title>Symfony Heroku Demo| List User</title>
    <link rel=\"stylesheet\" href=\"//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css\"/>
    
    <script src=\"//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js\"></script>
    <div hight=\"20%\"></div>
   <body> 
    <table id=\"users\" class=\"display\" cellspacing=\"0\" width=\"85%\">
        <thead>
            <tr>
                
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Photo</th>
                <th>Phone</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            {% for book_type in data %}
                <tr>
                    <td>{{book_type .firstName}}</td>
                    <td>{{book_type .lastName}}</td>
                    <td>{{book_type .address}} <br>{{book_type .addresstwo}}</td>
                    <td>{{book_type .email}}</td>
                    <td><img id=\"uploadedimage\" style=\"width: 50px; height: 50px;\" src=\"/uploads/{{book_type.file}}\"></td>
                    <td>{{book_type .phone}}</td>
                    <td><a class=\"alink previous\" title=\"Edit User\" href=\"{{path('upload_edit', {'id': book_type .id})}}\" >Edit</a>  <a class=\"alink previous\" title=\"View User\" href=\"{{path('upload_viewuser', {'id': book_type .id})}}\" >View</a>  <a class=\"alink previous\"  title=\"Remove User\" onclick=\"fnRemoveContent({{book_type .id}});\" href=\"#\">Delete</a></td>
                
                </tr>
            {% endfor %}
        </tbody>
    </table>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('#users').DataTable({
                \"ordering\": false,
                 //\"order\": [[ 0, \"desc\" ]]
            });
        });
        
        function fnRemoveContent(id){
            if (confirm(\"Are you sure you want to delete?\")) {
                \$.ajax({        
                    url: '{{path('upload_delete')}}',
                    type: 'post',             
                    data: {'id' : id},
                    success: function(response) {
                        window.location.reload();
                    }           
                });
            }
        }
    </script>
    </body>
{% endblock %}
{% include 'uploadBundle:Default:footer.html.twig' %}", "uploadBundle:Default:view.html.twig", "/var/www/html/newupload_new/src/uploadBundle/Resources/views/Default/view.html.twig");
    }
}
