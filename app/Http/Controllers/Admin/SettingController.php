<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShippingsRequest;
use App\Models\Setting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{


    public function editShipping($type)
    {
        switch ($type) {
            case 'free':
                $shippingMethod = Setting::where('key', 'free delivery ')->first();
                break;

            case 'inner':
                $shippingMethod = Setting::where('key', 'internal delivery  ')->first();
                break;

            case 'external':
                $shippingMethod = Setting::where('key', 'external delivery')->first();
                break;
            default:
                $shippingMethod = Setting::where('key', 'free delivery ')->first();
        }

        return view('admin.settings.shippingMethods.edit', compact('shippingMethod'));
    }


    public function updateShipping(ShippingsRequest $request, $id)
    {
        try {
            $shipping_method = Setting::find($id);

            DB::beginTransaction();
            $shipping_method->update(['plan_value' => $request->free_val]);
            $shipping_method->value = $request->name;
            $shipping_method->save();
            DB::commit();
            return redirect()->back()->with('success', 'تم تحديث البيانات بنجاح');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', 'خطأ فى تحديث البيانات يرجى المحاولة مرة أخرى');
            DB::rollBack();
        }


    }


}
