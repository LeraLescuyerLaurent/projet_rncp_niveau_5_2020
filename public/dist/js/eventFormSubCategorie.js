let $post_category = $('#post_Category')
let $token = $('#post_token')
let $title = $('#post_title')
let $slug = $('#post_slug')
let $imagesUne = $('#post_imagesUne')
let $hat = $('#post_hat')
let $content = $('#post_content')

$post_category.change(function () {
    let $form = $(this).closest('form')

    let data = {}

    data[$title.attr('name')] = $title.val()
    data[$slug.attr('name')] = $slug.val()
    data[$imagesUne.attr('name')] = $imagesUne.val()
    data[$hat.attr('name')] = $hat.val()
    data[$content.attr('name')] = $content.val()
    data[$token.attr('name')] = $token.val()
    data[$post_category.attr('name')] = $post_category.val()
    $.post($form.attr('action'),data).then(function (response){
        console.log(data)
        $('#post_subCategory').replaceWith(
            $(response).find("#post_subCategory")
        )
    })
})




