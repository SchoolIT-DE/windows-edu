<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Symfony\Bundle\SecurityBundle\SecurityBundle::class => ['all' => true],
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true],
    Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle::class => ['all' => true],
    Symfony\Bundle\MonologBundle\MonologBundle::class => ['all' => true],
    Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle::class => ['all' => true],
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true, 'test' => true],
    Symfony\Bundle\DebugBundle\DebugBundle::class => ['dev' => true, 'test' => true],
    Symfony\Bundle\MakerBundle\MakerBundle::class => ['dev' => true],
    LightSaml\SymfonyBridgeBundle\LightSamlSymfonyBridgeBundle::class => ['all' => true],
    LightSaml\SpBundle\LightSamlSpBundle::class => ['all' => true],
    EightPoints\Bundle\GuzzleBundle\EightPointsGuzzleBundle::class => ['all' => true],
    Knp\Bundle\MenuBundle\KnpMenuBundle::class => ['all' => true],
    FrostieDE\ComposerDependencyListBundle\ComposerDependencyListBundle::class => ['all' => true],
    SchulIT\CommonBundle\CommonBundle::class => ['all' => true],
    SchulIT\KivutoBundle\KivutoBundle::class => ['all' => true],
];
