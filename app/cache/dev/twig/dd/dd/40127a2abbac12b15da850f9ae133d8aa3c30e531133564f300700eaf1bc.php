<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_dddd40127a2abbac12b15da850f9ae133d8aa3c30e531133564f300700eaf1bc extends Twig_Template
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
        // line 2
        echo "
<div class=\"row\">

    <div class=\"span3\">
        ";
        // line 6
        $this->env->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnects.html.twig")->display($context);
        // line 7
        echo "    </div>
    <div class=\"span9\">
        <h2>Mes informations</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">

                <div class=\"span4\">
                    <h4>Modifier mes informations</h4>
                    <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " method=\"POST\">
                        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
                        <br />
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  43 => 16,  37 => 15,  27 => 7,  25 => 6,  19 => 2,  31 => 4,  28 => 3,);
    }
}
