<div class="content-wrapper pb-0">
    <div class="row">
        <div class="content-wrapper" dir="rtl">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div id="dvContents" class="card-body" style="text-align: center" >
                            <h4 class="card-title" style="font-size: 20px;">افراد مسئول صندوق ها</h4>
                            <form wire:submit="refresh">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                      <div class="col-sm-9">
                                        <select class="form-control" wire:model="addround">
                                          <option value="1">انتخاب دوره</option>
                                        </select>
                                      </div>
                                      <button type="submit" class="btn btn-danger">نمایش</button>
                                    </div>
                        
                                </div>  
                            </form>
                            <div class="table-responsive table-hover">
                                <table id="printTable" class="table table-hover" dir="rtl">
                                    <tbody>
                                        <tr>
                                            <th>شماره صندوق</th>
                                            <th>شنبه</th>
                                            <th>یک شنبه</th>
                                            <th>دوشنبه</th>
                                            <th>سه شنبه</th>
                                            <th>چهارشنبه</th>
                                            <th>پنجشنبه</th>
                                            <th>جمعه</th>
                                        </tr>
                                        <tr>
                                            <td>۱</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                            <td>محمد</td>
                                        </tr>                                                                                                              
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>