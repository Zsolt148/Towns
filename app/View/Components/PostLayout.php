<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PostLayout extends Component
{

  /**
   * The post to display.
   * 
   * @var Post
   */
  public $post;

  /**
   *  Create the component instnce.
   * 
   * @param Post $post
   * @return void
   */
  public function __construct($post)
  {
    $this->post = $post;
  }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('components.posts.post');
    }
}
