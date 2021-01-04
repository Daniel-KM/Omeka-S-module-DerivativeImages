<?php declare(strict_types=1);
namespace DerivativeImages\Service\Form;

use DerivativeImages\Form\ConfigForm;
use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

class ConfigFormFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $services, $requestedName, array $options = null)
    {
        $form = new ConfigForm(null, $options);
        $form->setConnection($services->get('Omeka\Connection'));
        return $form;
    }
}
