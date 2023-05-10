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

/* themes/custom/my_theme/templates/content/node--view--publication-list--block-1.html.twig */
class __TwigTemplate_288e022b71875eaf13375387e9fed3e303d4b1f2e8bb4ba95130c2a5ab68a5b3 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "
";
        // line 63
        $context["card_base_class"] = ((array_key_exists("card_base_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["card_base_class"] ?? null), 63, $this->source), "publication-card")) : ("publication-card"));
        // line 64
        echo "
";
        // line 65
        ob_start();
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cover_image", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "
";
        $context["publication_img"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        echo "
";
        // line 69
        ob_start();
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_content_category", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "
";
        $context["publication_category"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        echo "
";
        // line 73
        ob_start();
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "
";
        $context["publication_summry"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        echo "

";
        // line 78
        ob_start();
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_published_date", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
        echo "
";
        $context["published_date"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 81
        echo "

<div ";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, $this->sandbox->ensureToStringAllowed(($context["card_base_class"] ?? null), 83, $this->source), $this->sandbox->ensureToStringAllowed(($context["card_modifiers"] ?? null), 83, $this->source), $this->sandbox->ensureToStringAllowed(($context["card_blockname"] ?? null), 83, $this->source)));
        echo ">
\t<div ";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "wrapper", [], $this->sandbox->ensureToStringAllowed(($context["card_base_class"] ?? null), 84, $this->source)));
        echo ">
\t\t";
        // line 85
        if (($context["publication_img"] ?? null)) {
            // line 86
            echo "\t\t\t<div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "img", [], $this->sandbox->ensureToStringAllowed(($context["card_base_class"] ?? null), 86, $this->source)));
            echo ">
\t\t\t\t";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["publication_img"] ?? null), 87, $this->source), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 90
        echo "
\t\t<div ";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "content", [], $this->sandbox->ensureToStringAllowed(($context["card_base_class"] ?? null), 91, $this->source)));
        echo ">
\t\t\t<div ";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "category", [], $this->sandbox->ensureToStringAllowed(($context["card_base_class"] ?? null), 92, $this->source)));
        echo ">
\t\t\t<img class=\"icon\" src=\"/themes/custom/my_theme/images/plane.png\" alt=\"plane icon\" />
\t\t\t\t";
        // line 94
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["publication_category"] ?? null), 94, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div ";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "heading", [], $this->sandbox->ensureToStringAllowed(($context["card_base_class"] ?? null), 96, $this->source)));
        echo ">
\t\t\t\t<h2 ";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "heading", [0 => "text"], $this->sandbox->ensureToStringAllowed(($context["card_base_class"] ?? null), 97, $this->source)));
        echo ">
\t\t\t\t\t<a href=\"";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 98, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 98, $this->source), "html", null, true);
        echo "</a>
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<div ";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "description", [], $this->sandbox->ensureToStringAllowed(($context["card_base_class"] ?? null), 101, $this->source)));
        echo ">
\t\t\t\t";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["publication_summry"] ?? null), 102, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div ";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "language", [], $this->sandbox->ensureToStringAllowed(($context["card_base_class"] ?? null), 104, $this->source)));
        echo ">
\t\t\t\t";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_paragraph_reference", [], "any", false, false, true, 105));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 106
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 106), "field_language", [], "any", false, false, true, 106));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 107
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 107, $this->source), "html", null, true);
                echo "\" ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "language", [0 => "link"], $this->sandbox->ensureToStringAllowed(($context["card_base_class"] ?? null), 107, $this->source)));
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["entity"], "value", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<div ";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\emulsify_twig\BemTwigExtension']->bem($context, "date", [], $this->sandbox->ensureToStringAllowed(($context["card_base_class"] ?? null), 113, $this->source)));
        echo ">
\t<img class=\"icon\" src=\"/themes/custom/my_theme/images/plane.png\" alt=\"plane icon\" />
\t\t";
        // line 115
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["published_date"] ?? null), 115, $this->source), "html", null, true);
        echo "
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/my_theme/templates/content/node--view--publication-list--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 115,  189 => 113,  184 => 110,  178 => 109,  165 => 107,  160 => 106,  156 => 105,  152 => 104,  147 => 102,  143 => 101,  135 => 98,  131 => 97,  127 => 96,  122 => 94,  117 => 92,  113 => 91,  110 => 90,  104 => 87,  99 => 86,  97 => 85,  93 => 84,  89 => 83,  85 => 81,  80 => 79,  78 => 78,  74 => 76,  69 => 74,  67 => 73,  64 => 72,  59 => 70,  57 => 69,  54 => 68,  49 => 66,  47 => 65,  44 => 64,  42 => 63,  39 => 62,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bootstrap Barrio's theme implementation to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
     Only \"getter\" methods (method names starting with \"get\", \"has\", or \"is\")
     and a few common methods such as \"id\" and \"label\" are available. Calling
     other methods (such as node.delete) will result in an exception.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 */
#}

{% set card_base_class = card_base_class|default('publication-card') %}

{% set publication_img %}
{{ content.field_cover_image }}
{% endset %}

{% set publication_category %}
{{content.field_content_category}}
{% endset %}

{% set publication_summry %}
{{content.body}}
{% endset %}


{% set published_date %}
{{content.field_published_date}}
{% endset %}


<div {{ bem(card_base_class, card_modifiers, card_blockname) }}>
\t<div {{ bem('wrapper', [], card_base_class) }}>
\t\t{% if publication_img %}
\t\t\t<div {{ bem('img', [], card_base_class) }}>
\t\t\t\t{{publication_img}}
\t\t\t</div>
\t\t{% endif %}

\t\t<div {{ bem('content', [], card_base_class) }}>
\t\t\t<div {{ bem('category', [], card_base_class) }}>
\t\t\t<img class=\"icon\" src=\"/themes/custom/my_theme/images/plane.png\" alt=\"plane icon\" />
\t\t\t\t{{publication_category}}
\t\t\t</div>
\t\t\t<div {{ bem('heading', [], card_base_class) }}>
\t\t\t\t<h2 {{ bem('heading', ['text'], card_base_class) }}>
\t\t\t\t\t<a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<div {{ bem('description', [], card_base_class) }}>
\t\t\t\t{{publication_summry}}
\t\t\t</div>
\t\t\t<div {{ bem('language', [], card_base_class) }}>
\t\t\t\t{% for item in node.field_paragraph_reference %}
\t\t\t\t\t{% for entity in item.entity.field_language %}
\t\t\t\t\t\t<a href=\"{{url}}\" {{ bem('language', ['link'], card_base_class) }}>{{ entity.value }}</a>
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</div>
\t<div {{ bem('date', [], card_base_class) }}>
\t<img class=\"icon\" src=\"/themes/custom/my_theme/images/plane.png\" alt=\"plane icon\" />
\t\t{{published_date}}
\t</div>
</div>
", "themes/custom/my_theme/templates/content/node--view--publication-list--block-1.html.twig", "C:\\wamp64\\www\\qed_task\\web\\themes\\custom\\my_theme\\templates\\content\\node--view--publication-list--block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 63, "if" => 85, "for" => 105);
        static $filters = array("default" => 63, "escape" => 66);
        static $functions = array("bem" => 83);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['default', 'escape'],
                ['bem']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
