namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ThesisCard extends Component
{
    public $thesis;

    /**
     * Create a new component instance.
     */
    public function __construct($thesis)
    {
        $this->thesis = $thesis;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.thesis-card', ['thesis' => $this->thesis]);
    }
}
