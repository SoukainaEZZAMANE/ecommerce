<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_92a5ec31859935ccd006460bdbf80bf0668699d23cfff3437e0952f21451e2a6 extends Twig_Template
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
        // line 1
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => $this->getContext($context, "trace")));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  26 => 5,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  56 => 9,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  19 => 1,  98 => 40,  88 => 6,  80 => 19,  44 => 10,  36 => 7,  27 => 4,  22 => 2,  57 => 16,  54 => 21,  43 => 8,  40 => 8,  30 => 3,  107 => 24,  104 => 23,  99 => 25,  97 => 23,  93 => 9,  87 => 20,  78 => 40,  73 => 16,  68 => 14,  64 => 12,  52 => 10,  37 => 5,  35 => 4,  32 => 12,  29 => 2,  72 => 16,  67 => 20,  60 => 12,  55 => 13,  51 => 15,  46 => 7,  42 => 14,  39 => 6,  33 => 10,  31 => 5,  28 => 5,);
    }
}
