<?php

namespace App\Form;

use App\Entity\Blog;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('title', TextareaType::class, [
                'attr' => ['class' => 'form-control',
                    'placeholder'=>'write Title'],
            ])
            ->add('content', TextareaType::class, [
                'attr' => ['class' => 'form-control','placeholder'=>'write Content'],
            ])
            ->add('date')
            ->add('author', TextareaType::class, [
                'attr' => ['class' => 'form-control','placeholder'=>'write Author'],
            ])
            ->add('image', FileType::class, [
                'attr' => ['class' => 'form-control','placeholder'=>'place Image'],

            ])
            ->add('save',SubmitType::class, [
                'attr'=>[
                    'class'=>'btn btn-success'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Blog::class,
        ]);
    }
}
