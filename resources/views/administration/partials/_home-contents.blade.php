@if(!is_null($details))
    <table class="view-data-table general-quote-table">
        <tbody>
            <tr>
                <td>
                    <label>Date of Birth of the oldest Insured? </label>
                </td>
                <td>
                    {{ (!empty($details['birthdate_oldest_insured'])) ? date_format(date_create($details['birthdate_oldest_insured']), 'F, d Y') : '' }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Building Type: </label>
                </td>
                <td>
                    {{ $details['building_type'] }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Occupancy Type: </label>
                </td>
                <td>
                    {{ $details['occupancy_type'] }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Is the home used for business use?: </label>
                </td>
                <td>
                    @if ($details['is_business_purpose'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Is there are mortgage on the home?: </label>
                </td>
                <td>
                    @if ($details['is_mortgage'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Approx. when was the home built?: </label>
                </td>
                <td>
                    {{ $details['when_home_built'] }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Any repairs or renovations currently being done to the home?: </label>
                </td>
                <td>
                    @if ($details['is_currently_repaired'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Has the home been built to cyclone standards?: </label>
                </td>
                <td>
                    @if ($details['is_built_cyclone_standards'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Roof made of?*: </label>
                </td>
                <td>
                    {{ $details['roof_type'] }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Walls made of?*: </label>
                </td>
                <td>
                    {{ $details['wall_type'] }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Security: </label>
                </td>
                <td>
                    <label class="sub-table-title">Security on external doors:</label>
                    <table class="sub-table-detail">
                        <tbody>
                            <tr>
                                <td>
                                    <label>Deadlocks: </label>
                                </td>
                                <td>
                                    @if ($details['is_security_door_deadlocks'])
                                        <span class="label label-success">Yes</span>
                                    @else
                                        <span class="label label-danger">No</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Security Screen: </label>
                                </td>
                                <td>
                                    @if ($details['is_security_door_security_screen'])
                                        <span class="label label-success">Yes</span>
                                    @else
                                        <span class="label label-danger">No</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>None: </label>
                                </td>
                                <td>
                                    @if ($details['is_security_door_none'])
                                        <span class="label label-success">Yes</span>
                                    @else
                                        <span class="label label-danger">No</span>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <label class="sub-table-title">Security on external windows:</label>
                    <table class="sub-table-detail">
                        <tbody>
                            <tr>
                                <td>
                                    <label>Key Locks: </label>
                                </td>
                                <td>
                                    @if ($details['is_security_windows_key_locks'])
                                        <span class="label label-success">Yes</span>
                                    @else
                                        <span class="label label-danger">No</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Security Screens / Bar: </label>
                                </td>
                                <td>
                                    @if ($details['is_security_windows_screens_bars'])
                                        <span class="label label-success">Yes</span>
                                    @else
                                        <span class="label label-danger">No</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Roller Shutter: </label>
                                </td>
                                <td>
                                    @if ($details['is_security_windows_roller_shutter'])
                                        <span class="label label-success">Yes</span>
                                    @else
                                        <span class="label label-danger">No</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>None: </label>
                                </td>
                                <td>
                                    @if ($details['is_security_windows_none'])
                                        <span class="label label-success">Yes</span>
                                    @else
                                        <span class="label label-danger">No</span>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <label class="sub-table-title">Security on external windows:</label>
                    <table class="sub-table-detail">
                        <tbody>
                            <tr>
                                <td>
                                    <label>24 Hour Monitored Alarm: </label>
                                </td>
                                <td>
                                    @if ($details['is_security_other_whole_day_monitor_alarm'])
                                        <span class="label label-success">Yes</span>
                                    @else
                                        <span class="label label-danger">No</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Local Alarm: </label>
                                </td>
                                <td>
                                    @if ($details['is_security_other_local_alarm'])
                                        <span class="label label-success">Yes</span>
                                    @else
                                        <span class="label label-danger">No</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Fixed Safe: </label>
                                </td>
                                <td>
                                    @if ($details['is_security_other_fixed_safe'])
                                        <span class="label label-success">Yes</span>
                                    @else
                                        <span class="label label-danger">No</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Gated Community: </label>
                                </td>
                                <td>
                                    @if ($details['is_security_other_gated_community'])
                                        <span class="label label-success">Yes</span>
                                    @else
                                        <span class="label label-danger">No</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Other: </label>
                                </td>
                                <td>
                                    @if ($details['is_security_other_custom'])
                                        <span class="label label-success">Yes</span>
                                    @else
                                        <span class="label label-danger">No</span>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Cover Required: </label>
                </td>
                <td>
                    <table class="sub-table-detail">
                        <tbody>
                            <tr>
                                <td>
                                    <label>Building Sum Insured: </label>
                                </td>
                                <td>
                                    {{ $details['amount_building_sum_insured'] }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Contents Sum Insured: </label>
                                </td>
                                <td>
                                    {{ $details['amount_contents_sum_insured'] }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Do you require any special valuables insurance? If so please provide further detail: </label>
                                </td>
                                <td>
                                    <p>{{ $details['special_valuables_insurance'] }}</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Past Experience: </label>
                </td>
                <td>
                    <table class="sub-table-detail">
                        <tbody>
                            <tr>
                                <td>
                                    <label>How many years have you had insurance on this property?: </label>
                                </td>
                                <td>
                                    {{ ($details['property_years_insured'] > 1) ? $details['property_years_insured'] . ' years' : $details['property_years_insured'] . ' year' }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>If previously insured, who was this insurer?: </label>
                                </td>
                                <td>
                                    {{ $details['insurer_name'] }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>In the last 4 years have any of the insureds had a building and/or contents claim at this location?: </label>
                                </td>
                                <td>
                                    @if ($details['is_had_claims_within_four_years'])
                                        <span class="label label-success">Yes</span>
                                    @else
                                        <span class="label label-danger">No</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Claim Description: </label>
                                </td>
                                <td>
                                    <p>{{ $details['claim_description'] }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Additional information about the policy: </label>
                                </td>
                                <td>
                                    <p>{{ $details['additional_information'] }}</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
@else
    <h2 style="text-align: center;">Data not available!</h2>
@endif