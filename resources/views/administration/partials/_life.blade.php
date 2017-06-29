@if(!is_null($details))
    <table class="view-data-table general-quote-table">
        <tbody>
            <tr>
                <td>
                    <label>Birthdate: </label>
                </td>
                <td>
                    {{ date_format(date_create($details['birthdate']), 'F, d Y') }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Gender: </label>
                </td>
                <td>
                    {{ ucfirst($details['gender']) }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Is Smoker: </label>
                </td>
                <td>
                    @if ($details['is_smoker'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>State: </label>
                </td>
                <td>
                    {{ $details['state'] }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Payout amount to loved ones: </label>
                </td>
                <td>
                    @if ($details['is_pay_life_insurance'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Payout amount if disabled - TPD Insurance: </label>
                </td>
                <td>
                    @if ($details['is_pay_if_disabled'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Payout amount if sick or injured - Trauma Insurance: </label>
                </td>
                <td>
                    @if ($details['is_pay_if_trauma'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Payout amount for income replacement – Income Protection: </label>
                </td>
                <td>
                    @if ($details['is_pay_income_replacement'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Payout amount to loved ones – Amount Cover: </label>
                </td>
                <td>
                    @if (is_numeric($details['is_pay_income_replacement']))
                        {{ '$' . number_format($details['is_pay_income_replacement'], 2) }}
                    @else
                        Invalid Value
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Payout amount if disabled – Amount Cover: </label>
                </td>
                <td>
                    @if (is_numeric($details['amount_disability_insurance']))
                        {{ '$' . number_format($details['amount_disability_insurance'], 2) }}
                    @else
                        Invalid Value
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Payout amount if sick or injured – Amount Cover: </label>
                </td>
                <td>
                    @if (is_numeric($details['amount_trauma_insurance']))
                        {{ '$' . number_format($details['amount_trauma_insurance'], 2) }}
                    @else
                        Invalid Value
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Payout amount for income replacement – Monthly Cover: </label>
                </td>
                <td>
                    @if (is_numeric($details['amount_monthly_cover']))
                        {{ '$' . number_format($details['amount_monthly_cover'], 2) }}
                    @else
                        Invalid Value
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Benefit Period: </label>
                </td>
                <td>
                    {{ $details['benefit_period'] }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Waiting Period: </label>
                </td>
                <td>
                    {{ $details['waiting_period'] }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Agreed Value: </label>
                </td>
                <td>
                    @if ($details['is_agreed_value'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>Advanced Features: </label>
                </td>
                <td>
                    @if ($details['is_advanced_features'])
                        <span class="label label-success">Yes</span>
                    @else
                        <span class="label label-danger">No</span>
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
@else
    <h2 style="text-align: center;">Data not available!</h2>
@endif