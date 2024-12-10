<?

namespace App\Filament\Resources\EventResource\Pages;

use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\EventResource;
use Filament\Actions;




class EditEvent extends EditRecord
{
    protected static string $resource = EventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
