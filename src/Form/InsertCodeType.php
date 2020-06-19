<?php

namespace App\Form;

use App\Entity\InsertCode;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class InsertCodeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('langage',ChoiceType::class, [
                'choices'  => [
                    'HTML' => 'markup',
                    'CSS' => 'css',
                    'JavaScript' => 'javascript',
                    'CoffeeScript' => 'coffeescript',
                    'React JSX' => 'react-jsx',
                    'React TSX' => 'react-tsx',
                    'PHP' => 'php',
                    'Markdown' => 'markdown',
                    'SQL' => 'sql',
                    'Git' => 'git',
                    'Python' => 'python',
                    'C' => 'c',
                    'C#' => 'csharp',
                    'C++' => 'cpp',
                    'JSDoc' => 'jsdoc',
                    'JS Extras' => 'js-extras',
                    'XML' => 'xml',
                    'SVG' => 'svg',
                    'Regex' => 'regex',
                    'PHPDoc' => 'phpdoc',
                    'PHP Extras' => 'php-extras',
                    'JSON' => 'json',
                    'JSON5' => 'json5',
                    'JSONP' => 'jsonp',
                    'JS Templates' => 'js-templates',
                    'Sass (Scss)' => 'scss',
                    'Stylus' => 'stylus',
                    'Sass (Sass)' => 'sass (Sass)',
                    'Shell session' => 'Shell session',
                    'PowerShell' => 'PowerShell',
                    'SAS' => 'sas',
                    'Less' => 'less',
                    'Ruby' => 'ruby',
                    'Java' => 'java',
                    'JavaDoc' => 'javadoc',
                    'JavaDoc-like' => 'javadoc-like',
                    'Java stack trace' => 'javastacktrace',
                    'Twig' => 'twig',
                    'Go' => 'go',
                    'GraphQL' => 'graphql',
                    'Solidity' => 'solidity',
                    'Elixir' => 'elixir',
                    'Erlang' => 'erlang',
                    'Perl' => 'perl',
                    'YAML' => 'yaml',
                    'Docker' => 'docker',
                    'BBcode' => 'bbcode',
                    'Shortcode' => 'shortcode',
                    'Scheme' => 'scheme',
                    'Smarty' => 'smarty',
                    'Kotlin' => 'kotlin',
                    'Q (kdb+ database)' => 'q',
                    'Scala' => 'scala',
                    'Fortran' => 'fortran',
                    'QML' => 'qml',
                    'Haml' => 'haml',
                    'Apache Configuration' => 'apacheconf',
                    'AsciiDoc' => 'asciidoc',
                    'Icon' => 'icon',
                    'XQuery' => 'xquery',
                    ],
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => InsertCode::class,
        ]);
    }
}
