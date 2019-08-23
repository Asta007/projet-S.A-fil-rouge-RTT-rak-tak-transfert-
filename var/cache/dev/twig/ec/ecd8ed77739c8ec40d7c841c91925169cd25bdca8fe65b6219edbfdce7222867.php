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

/* pdf_model.html.twig */
class __TwigTemplate_6c33ad7c189f444a6eb3f4009cf58918d546a696f36f6ef795634278b43e2aca extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_model.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
        <style>
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }

            #header{
                background-color: #c00000;
                padding: 10px;
            }


            #header h2{
                color:#fff;
            }

            #header p{
                color:#fff;
                margin-top: 5px;
            }

            #content{
                width:90%;
                margin: auto;
            }

            #intro{
                margin-top: 10px;
                margin-bottom: 40px;
                font-size: 20px;
                text-align: justify;
            }

            #legal{
                font-size: 16px;
                color:#c00000;
                margin-bottom: 10px;
            }

            table{
                border-collapse: collapse;
                width: 100%;
                margin-bottom: 5px;
            }

            table tr,th,td{
                height:30px;
                border:solid gray 1px;
                text-align: center;
            }

            table td{

            }

            table th{
                background-color: #dbdbdb;
            }

            #nb{
                font-size: 12px;
                text-align: right;
            }

            #articles{
                margin-top: 40px;
                margin-bottom: 20px;
            }

            #articles p{
                margin-top: 20px;
                color:#333;
            }

            #direc{
                text-align: right;
            }
        </style>
    </head>
    <body>

";
        // line 93
        $this->displayBlock('body', $context, $blocks);
        // line 167
        echo "</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            ";
        // line 8
        echo "            ";
        // line 9
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 93
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 94
        echo "
<div id=\"header\">
    <h2>
        CONTRAT DE PARTENARIAT <br>
    </h2>
    
    <p>Conclut à  Dakar le : ";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 100, $this->source); })()), "html", null, true);
        echo " </p>
</div>

<br>

<div id=\"content\">
    <div id=\"intro\">
        <p>
            Par cette present document nous le groupe Wari attestons lier une relation de partaneriat avec l'entreprise <strong> ";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["denome"]) || array_key_exists("denome", $context) ? $context["denome"] : (function () { throw new RuntimeError('Variable "denome" does not exist.', 108, $this->source); })()), "html", null, true);
        echo " </strong> que voici compte tenu
            de nos centre d'interet convergeant dans le cadre du transfert d'argent. <br>
            a cette effet nous somme desormé en etroite collaboration et regis par des regles de vie dont la transgression ne manquera pas de faire l'objet de sanction adecquoites.
        </p>
    </div>
    
    <h3 id=\"legal\"> Information du représentant légal </h3>

    <table>
        <tr>
            <th> Nom </th>
            <th> Prenom </th>
            <th> Email </th>
            <th> Adresse </th>
            <th> Cni </th>
            <th> Telephone </th>
        </tr>
        <tr>
            <td> ";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 126, $this->source); })()), "nom", [], "any", false, false, false, 126), "html", null, true);
        echo "</td>
            <td> ";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 127, $this->source); })()), "prenom", [], "any", false, false, false, 127), "html", null, true);
        echo "</td>
            <td> ";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 128, $this->source); })()), "emailUser", [], "any", false, false, false, 128), "html", null, true);
        echo "</td>
            <td> ";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 129, $this->source); })()), "adresseUser", [], "any", false, false, false, 129), "html", null, true);
        echo "</td>
            <td> ";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 130, $this->source); })()), "cni", [], "any", false, false, false, 130), "html", null, true);
        echo "</td>
            <td> ";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 131, $this->source); })()), "telephoneUser", [], "any", false, false, false, 131), "html", null, true);
        echo "</td>
        </tr>
    </table>

    <p id=\"nb\">
        <STRONG> NB :</STRONG> Conformément a ce qui a éte dis plus haut,des regles de vie on éte etablie pour assurer une parfaite cohaison nous permettant
        ainsi de plus tiré profit de notre collaboration
    </p>
    
    <div id=\"articles\">
        <p>
            <strong> Article 1 : </strong>
            Tout partenaire prestataire ,en vu de garder un contacte permanent a amener a disposer d'un representant legal a 
            qui nous communiquerons tout infos vous concernant
        </p>
        
        <p> 
            <strong> Article 2 : </strong>
            Tout partenaire depuis son adhesion au system beificie aussi tot d'un compte qui sera bloqué en cas d'innactivité
            constaté sur un duréé moyenne de 3ans
        </p>
        
        <p> 
            <strong> Article 3 : </strong>
            Des reunion aurons lieu decmenbre en vu de quoi nous aurrons la possibilité de rediscuter nos articles
            de par leur respect, leur suivis, leur interet, et ou leur retarit du reglement
        </p>

    </div>
    
    <hr> <br>

    <p id=\"direc\"> La direction </p>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pdf_model.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  249 => 131,  245 => 130,  241 => 129,  237 => 128,  233 => 127,  229 => 126,  208 => 108,  197 => 100,  189 => 94,  182 => 93,  175 => 9,  173 => 8,  171 => 7,  164 => 6,  151 => 5,  142 => 167,  140 => 93,  55 => 10,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            {# <link rel=\"stylesheet\" type=\"text/css\" href=\"pdf.css\"> #}
            {# <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('pdf.css') }}\"> #}
        {% endblock %}

        <style>
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }

            #header{
                background-color: #c00000;
                padding: 10px;
            }


            #header h2{
                color:#fff;
            }

            #header p{
                color:#fff;
                margin-top: 5px;
            }

            #content{
                width:90%;
                margin: auto;
            }

            #intro{
                margin-top: 10px;
                margin-bottom: 40px;
                font-size: 20px;
                text-align: justify;
            }

            #legal{
                font-size: 16px;
                color:#c00000;
                margin-bottom: 10px;
            }

            table{
                border-collapse: collapse;
                width: 100%;
                margin-bottom: 5px;
            }

            table tr,th,td{
                height:30px;
                border:solid gray 1px;
                text-align: center;
            }

            table td{

            }

            table th{
                background-color: #dbdbdb;
            }

            #nb{
                font-size: 12px;
                text-align: right;
            }

            #articles{
                margin-top: 40px;
                margin-bottom: 20px;
            }

            #articles p{
                margin-top: 20px;
                color:#333;
            }

            #direc{
                text-align: right;
            }
        </style>
    </head>
    <body>

{% block body %}

<div id=\"header\">
    <h2>
        CONTRAT DE PARTENARIAT <br>
    </h2>
    
    <p>Conclut à  Dakar le : {{date}} </p>
</div>

<br>

<div id=\"content\">
    <div id=\"intro\">
        <p>
            Par cette present document nous le groupe Wari attestons lier une relation de partaneriat avec l'entreprise <strong> {{denome}} </strong> que voici compte tenu
            de nos centre d'interet convergeant dans le cadre du transfert d'argent. <br>
            a cette effet nous somme desormé en etroite collaboration et regis par des regles de vie dont la transgression ne manquera pas de faire l'objet de sanction adecquoites.
        </p>
    </div>
    
    <h3 id=\"legal\"> Information du représentant légal </h3>

    <table>
        <tr>
            <th> Nom </th>
            <th> Prenom </th>
            <th> Email </th>
            <th> Adresse </th>
            <th> Cni </th>
            <th> Telephone </th>
        </tr>
        <tr>
            <td> {{data.nom}}</td>
            <td> {{data.prenom}}</td>
            <td> {{data.emailUser}}</td>
            <td> {{data.adresseUser}}</td>
            <td> {{data.cni}}</td>
            <td> {{data.telephoneUser}}</td>
        </tr>
    </table>

    <p id=\"nb\">
        <STRONG> NB :</STRONG> Conformément a ce qui a éte dis plus haut,des regles de vie on éte etablie pour assurer une parfaite cohaison nous permettant
        ainsi de plus tiré profit de notre collaboration
    </p>
    
    <div id=\"articles\">
        <p>
            <strong> Article 1 : </strong>
            Tout partenaire prestataire ,en vu de garder un contacte permanent a amener a disposer d'un representant legal a 
            qui nous communiquerons tout infos vous concernant
        </p>
        
        <p> 
            <strong> Article 2 : </strong>
            Tout partenaire depuis son adhesion au system beificie aussi tot d'un compte qui sera bloqué en cas d'innactivité
            constaté sur un duréé moyenne de 3ans
        </p>
        
        <p> 
            <strong> Article 3 : </strong>
            Des reunion aurons lieu decmenbre en vu de quoi nous aurrons la possibilité de rediscuter nos articles
            de par leur respect, leur suivis, leur interet, et ou leur retarit du reglement
        </p>

    </div>
    
    <hr> <br>

    <p id=\"direc\"> La direction </p>

</div>
{% endblock %}
</body>
</html>
", "pdf_model.html.twig", "/var/www/html/my symphon/Fil_touge_RTT/templates/pdf_model.html.twig");
    }
}
