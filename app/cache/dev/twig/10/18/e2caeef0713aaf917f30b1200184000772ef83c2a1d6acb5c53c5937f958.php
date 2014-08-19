<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_1018e2caeef0713aaf917f30b1200184000772ef83c2a1d6acb5c53c5937f958 extends Twig_Template
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

<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
            <h2>Connexion</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        <h4>Pas encore inscrit ?</h4>
                        <em>
                            nous vous invitons à vous inscrire<br />
                            afin de passer votre commande et de manger équilibré.
                        </em>
                    </div>

                    <div class=\"span4 offset2\">
                        <h4>Inscription</h4>
                        <form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
                            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
                            <div>
                                <br />
                                <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 24,  45 => 21,  39 => 20,  19 => 2,);
    }
}
