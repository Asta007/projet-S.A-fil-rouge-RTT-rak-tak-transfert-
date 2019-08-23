<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* crud_support/show.html.twig */
class __TwigTemplate_b40ebe0349fdbc87271dcf8836e63fe32abc1cb84539f91c5f7f85a09a1566e2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud_support/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "crud_support/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "CrudSupport";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>CrudSupport</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crud_support"]) || array_key_exists("crud_support", $context) ? $context["crud_support"] : (function () { throw new RuntimeError('Variable "crud_support" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crud_support"]) || array_key_exists("crud_support", $context) ? $context["crud_support"] : (function () { throw new RuntimeError('Variable "crud_support" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crud_support"]) || array_key_exists("crud_support", $context) ? $context["crud_support"] : (function () { throw new RuntimeError('Variable "crud_support" does not exist.', 20, $this->source); })()), "prenom", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Naissance</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["crud_support"]) || array_key_exists("crud_support", $context) ? $context["crud_support"] : (function () { throw new RuntimeError('Variable "crud_support" does not exist.', 24, $this->source); })()), "naissance", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crud_support"]) || array_key_exists("crud_support", $context) ? $context["crud_support"] : (function () { throw new RuntimeError('Variable "crud_support" does not exist.', 24, $this->source); })()), "naissance", [], "any", false, false, false, 24), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crud_support"]) || array_key_exists("crud_support", $context) ? $context["crud_support"] : (function () { throw new RuntimeError('Variable "crud_support" does not exist.', 28, $this->source); })()), "age", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["crud_support"]) || array_key_exists("crud_support", $context) ? $context["crud_support"] : (function () { throw new RuntimeError('Variable "crud_support" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crud_support_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crud_support_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["crud_support"]) || array_key_exists("crud_support", $context) ? $context["crud_support"] : (function () { throw new RuntimeError('Variable "crud_support" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 41
        echo twig_include($this->env, $context, "crud_support/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "crud_support/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 41,  129 => 39,  124 => 37,  116 => 32,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}CrudSupport{% endblock %}

{% block body %}
    <h1>CrudSupport</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ crud_support.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ crud_support.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ crud_support.prenom }}</td>
            </tr>
            <tr>
                <th>Naissance</th>
                <td>{{ crud_support.naissance ? crud_support.naissance|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>{{ crud_support.age }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ crud_support.description }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('crud_support_index') }}\">back to list</a>

    <a href=\"{{ path('crud_support_edit', {'id': crud_support.id}) }}\">edit</a>

    {{ include('crud_support/_delete_form.html.twig') }}
{% endblock %}
", "crud_support/show.html.twig", "/var/www/html/my symphon/Fil_touge_RTT/templates/crud_support/show.html.twig");
    }
}
