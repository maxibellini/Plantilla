<?php

/* security/login.html.twig */
class __TwigTemplate_94c186cb4b04e93b259ad92466bf414ed05e6b2bfc805b82ab72a372115a7e0b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <style>
        .superior{
            height: 80%;
        }
        .contenido{
            height: 100%;
        }

        .etiqueta{
            color:white;
            text-shadow: 0px 0px 8px rgba(255,64,255,1), -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;;
            font-size: large;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "<div class=\"text-center contenido\">
    <div class=\"superior\"></div>
    ";
        // line 22
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 22, $this->source); })())) {
            // line 23
            echo "        <div class=\"etiqueta\"><h4>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 23, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 23, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "</h4></div>
    ";
        }
        // line 25
        echo "
    <form action=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
        <div class=\"form-row\">
            <div class=\"form-group col-md-2\">
                <label class=\"font-weight-bold etiqueta\" for=\"username\">Usuario:</label>
            </div>
            <div class=\"form-group col-md-3\">
                <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "\" />
            </div>
            <div class=\"form-group col-md-2\">
                <label class=\"font-weight-bold etiqueta\" for=\"password\">Contraseña:</label>
                
            </div>
            <div class=\"form-group col-md-3\">
                <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" />
            </div>
            <div class=\"form-group col-md-2\">
                <button class=\"form-control btn-dark\" type=\"submit\">Ingresar</button>
            </div>
        </div> 
        

        

        ";
        // line 54
        echo "
        
    </form>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 54,  111 => 32,  102 => 26,  99 => 25,  93 => 23,  91 => 22,  87 => 20,  78 => 19,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <style>
        .superior{
            height: 80%;
        }
        .contenido{
            height: 100%;
        }

        .etiqueta{
            color:white;
            text-shadow: 0px 0px 8px rgba(255,64,255,1), -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;;
            font-size: large;
        }
    </style>
{% endblock %}
{% block body %}
<div class=\"text-center contenido\">
    <div class=\"superior\"></div>
    {% if error %}
        <div class=\"etiqueta\"><h4>{{ error.messageKey|trans(error.messageData, 'security') }}</h4></div>
    {% endif %}

    <form action=\"{{ path('login') }}\" method=\"post\">
        <div class=\"form-row\">
            <div class=\"form-group col-md-2\">
                <label class=\"font-weight-bold etiqueta\" for=\"username\">Usuario:</label>
            </div>
            <div class=\"form-group col-md-3\">
                <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
            </div>
            <div class=\"form-group col-md-2\">
                <label class=\"font-weight-bold etiqueta\" for=\"password\">Contraseña:</label>
                
            </div>
            <div class=\"form-group col-md-3\">
                <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" />
            </div>
            <div class=\"form-group col-md-2\">
                <button class=\"form-control btn-dark\" type=\"submit\">Ingresar</button>
            </div>
        </div> 
        

        

        {#
            If you want to control the URL the user
            is redirected to on success (more details below)
            <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
        #}

        
    </form>
</div>
{% endblock %}", "security/login.html.twig", "C:\\wamp\\www\\Plantilla\\templates\\Security\\login.html.twig");
    }
}
