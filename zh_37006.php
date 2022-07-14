<?php $data["title"] = "ZH_Báo cáo tình trạng đơn hàng"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section-small">
    <div class="uk-container uk-container-expand">
        <div class="uk-grid-medium uk-grid" uk-grid>
            <!--fillter-->
            <div class="uk-width-1-1">
                <form class="uk-grid-small uk-grid" uk-grid>
                    <div class="uk-width-auto">
                        <input class="uk-input zh_37006__fillter__rangeDate" type="date" placeholder="">
                    </div>
                    <div class="uk-width-auto">
                        <div uk-form-custom="target: > * > span:first-child">
                            <select>
                                <option value="">Chọn kho</option>
                                <option value="1">Option 01</option>
                                <option value="2">Option 02</option>
                                <option value="3">Option 03</option>
                                <option value="4">Option 04</option>
                            </select>
                            <button class="uk-button uk-button-default zh_37006__fillter__selectBtn" type="button" tabindex="-1">
                                <span></span>
                                <span uk-icon="icon: chevron-down"></span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <!--end fillter-->


            <!--content-main-->
            <div class="uk-width-expand">
                <div class="uk-margin-medium">
                    <div class="uk-child-width-1-4@m uk-grid-match uk-grid" uk-grid>
                        <div>

                        </div>
                        <div>
                            <div class="zh_37006__content__box--right zh_37006__content__box--bottom zh_37006__content__box zh_37006__content__box--yellow uk-card uk-card-default uk-card-body uk-padding-small uk-text-center">
                                Báo giá - 100 đơn - 100tr
                            </div>
                        </div>
                        <div>
                            <div class="zh_37006__content__box uk-card uk-card-default uk-card-body uk-padding-small uk-text-center">
                                Hủy đơn - 10 đơn - 10tr
                            </div>
                        </div>
                        <div>

                        </div>
                    </div>
                </div>
                <div class="uk-margin-medium-top">
                    <div class="uk-child-width-1-4@m uk-grid-match uk-grid" uk-grid>
                        <div>
                            <div class="zh_37006__content__box--right zh_37006__content__box uk-card uk-card-default uk-card-body uk-padding-small uk-text-center">
                                Đang xử lý - 20 đơn - 20tr
                            </div>
                        </div>
                        <div>
                            <div class="zh_37006__content__box--right zh_37006__content__box--bottom zh_37006__content__box zh_37006__content__box--hong1 uk-card uk-card-default uk-card-body uk-padding-small uk-text-center">
                                Đã xác nhận - 90 đơn - 90tr
                            </div>
                        </div>
                        <div>
                            <div class="zh_37006__content__box uk-card uk-card-default uk-card-body uk-padding-small uk-text-center">
                                Hủy đơn - 10 đơn - 10tr
                            </div>
                        </div>
                        <div>

                        </div>
                    </div>
                </div>
                <div class="uk-margin-medium-top">
                    <div class="uk-child-width-1-4@m uk-grid-match uk-grid" uk-grid>
                        <div>
                            <div class="zh_37006__content__box--right zh_37006__content__box uk-card uk-card-default uk-card-body uk-padding-small uk-text-center">
                                Đang trên đường - 10 đơn - 10tr
                            </div>
                        </div>
                        <div>
                            <div class="zh_37006__content__box--right zh_37006__content__box--top zh_37006__content__box zh_37006__content__box--blue uk-card uk-card-default uk-card-body uk-padding-small uk-text-center">
                                Đã giao - 60 đơn - 60tr
                            </div>
                        </div>
                        <div>
                            <div class="zh_37006__content__box--right zh_37006__content__box--bottom zh_37006__content__box zh_37006__content__box--hong2 uk-card uk-card-default uk-card-body uk-padding-small uk-text-center">
                                Đã hoàn - 20 đơn - 20tr
                            </div>
                        </div>
                        <div>
                            <div class="zh_37006__content__box uk-card uk-card-default uk-card-body uk-padding-small uk-text-center">
                                Hoàn đã về - 5 đơn - 5tr
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-medium-top">
                    <div class="uk-child-width-1-4@m uk-grid-match uk-grid" uk-grid>
                        <div>

                        </div>
                        <div>

                        </div>
                        <div>
                            <div class="zh_37006__content__box uk-card uk-card-default uk-card-body uk-padding-small uk-text-center">
                                Hoàn chưa về - 15 đơn - 15tr
                            </div>
                        </div>
                        <div>

                        </div>
                    </div>
                </div>
                <div class="uk-margin-medium-top">
                    <div class="uk-child-width-1-4@m uk-grid-match uk-grid" uk-grid>
                        <div>
                            <div class="zh_37006__content__box--right zh_37006__content__box zh_37006__content__box--green uk-card uk-card-default uk-card-body uk-padding-small uk-text-center">
                                Hoàn thành upsale - 20 đơn - 20tr
                            </div>
                        </div>
                        <div>
                            <div class="zh_37006__content__box--right zh_37006__content__box--bottom zh_37006__content__box zh_37006__content__box--green uk-card uk-card-default uk-card-body uk-padding-small uk-text-center">
                                Hoàn thành - 30 đơn - 30tr
                            </div>
                        </div>
                        <div>
                            <div class="zh_37006__content__box zh_37006__content__box--green uk-card uk-card-default uk-card-body uk-padding-small uk-text-center">
                                Hoàn thành sale bán buôn - 4 đơn - 4tr
                            </div>
                        </div>
                        <div>

                        </div>
                    </div>
                </div>
                <div class="uk-margin-medium-top">
                    <div class="uk-child-width-1-4@m uk-grid-match uk-grid" uk-grid>
                        <div>

                        </div>
                        <div>
                            <div class="zh_37006__content__box--bottom zh_37006__content__box zh_37006__content__box--green uk-card uk-card-default uk-card-body uk-padding-small uk-text-center">
                                Hoàn thành sale - 6 đơn - 6tr
                            </div>
                        </div>
                        <div>

                        </div>
                        <div>

                        </div>
                    </div>
                </div>
                <div class="uk-margin-medium-top">
                    <div class="uk-child-width-1-4@m uk-grid-match uk-grid" uk-grid>
                        <div>

                        </div>
                        <div>
                            <div class="zh_37006__content__box uk-card uk-card-default uk-card-body uk-padding-small uk-text-center">
                                Chuyển upsale - 9 đơn - 9tr
                            </div>
                        </div>
                        <div>

                        </div>
                        <div>

                        </div>
                    </div>
                </div>
            </div>
            <!--end content-main-->




            <!--sidebar-->
            <div class="uk-width-1-3@m">
                <h3 class="uk-h3 zh_37006__sidebar__title uk-margin-small">Đã xác nhận</h3>
                <table class="uk-table uk-margin-small uk-table-small uk-table-divider zh_37006__sidebar__table">
                    <thead>
                    <tr>
                        <th>TT</th>
                        <th>Mã SO</th>
                        <th>Tên KH</th>
                        <th>Số điện thoại KH</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="">S0273861</a></td>
                        <td>Chị Lan</td>
                        <td>0358617801</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!--end sidebar-->
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>