

const animation_elements = document.getElementById('apparition')

function check_if_in_view() {
  const window_height = window.outerHeight
  const window_top_position = window.screenTop
  const window_bottom_position = (window_top_position + window_height);
 
  for(let i = 0; i < animation_elements.length; i++) {
    const element = animation_elements[i]
    const element_height = element.outerHeight
    const element_top_position = element.offset.top
    const element_bottom_position = (element_top_position + element_height)

    if((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
      element.addClass('animated')
    } else {
      element.removeClass('animated')
    }
  }
}

window.addEventListener('scroll', check_if_in_view)
window.addEventListener('resize', check_if_in_view)