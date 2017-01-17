<!-- Display the additional fields for booking vehicles -->

<tr>
    <td><strong><?=get_string('custom.num_passengers', 'block_mrbs')?></strong></td>
    <td>
        <input name="custom_data[num_passengers]" value="<?=(!empty($custom_data->num_passengers) ? $custom_data->num_passengers : '')?>" />
    </td>
</tr>

<tr>
    <td><strong><?=get_string('custom.destination', 'block_mrbs')?></strong></td>
    <td>
        <textarea name="custom_data[destination]"><?=(!empty($custom_data->destination) ? s($custom_data->destination) : '')?></textarea>
    </td>
</tr>
