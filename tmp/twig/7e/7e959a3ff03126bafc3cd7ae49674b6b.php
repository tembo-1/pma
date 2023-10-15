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

/* sql/relational_column_dropdown.twig */
class __TwigTemplate_c5fa7dcdb49aae22385527cffb8984f2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<span class=\"curr_value\">";
        echo twig_escape_filter($this->env, ($context["current_value"] ?? null), "html", null, true);
        echo "</span>
<a href=\"";
        // line 2
        echo PhpMyAdmin\Url::getFromRoute("/browse-foreigners");
        echo "\" data-post=\"";
        echo PhpMyAdmin\Url::getCommon(($context["params"] ?? null), "", false);
        echo "\" class=\"ajax browse_foreign\">
  ";
echo _gettext("Browse foreign values");
        // line 4
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "sql/relational_column_dropdown.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sql/relational_column_dropdown.twig", "C:\\hosting\\phpmyadmin\\templates\\sql\\relational_column_dropdown.twig");
    }
}
