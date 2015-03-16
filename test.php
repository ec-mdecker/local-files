<form method="POST" action="/" name="Newsletter_SignupForm">
  <div align="center">
    <table border="0" cellpadding="3" cellspacing="0" width="400">
      <tr>
        <td width="148" bgcolor="#000000">
          <font face="Arial" size="2" color="#FFFFFF"><b>Join our mailing list</b></font>
        </td>
      </tr>
      <tr>
        <td width="148" bgcolor="#f4f4f4">
          <font face="Arial" size="2">Email Address:<br>
            <input type="text" name="Email" size="50" maxlength="255"></font>
        </td>
      </tr>
      <tr>
        <td width="148" bgcolor="#f4f4f4">
          <font face="Arial" size="2">Re-Enter Email Address:<br>
            <input type="text" name="Email2" size="50" maxlength="255"></font>
        </td>
      </tr>
      <tr>
        <td width="148" bgcolor="#f4f4f4">
          <font face="Arial" size="2">Password:<br>
            <input type="password" name="Password" size="20" maxlength="25"></font>
        </td>
      </tr>
      <tr>
        <td align="left" width="148" bgcolor="#f4f4f4">
          <font face="Arial" size="2">Zip Code:<br>
            <select size="1" name="OptionalParameter1">
              <option value="stuff">stuff</option>
              <option value="more things">more things</option>
              <option value="another">another</option>
            </select></font></td>
      </tr>
      <tr>
        <td align="left" width="148" bgcolor="#f4f4f4">
          <font face="Arial" size="2">License Type:<br>
            <input type="text" name="OptionalParameter2" size="20"></font></td>
      </tr>
      <tr>
        <td align="left" width="148" bgcolor="#f4f4f4">
          <font face="Arial" size="2">License Expiration:<br>
            <input type="text" name="OptionalParameter3" size="20" OnFocus="CheckValue(document.getElementById('OptionalParameter3'),'MM/DD/YYYY');" OnBlur="CheckValue2(document.getElementById('OptionalParameter3'),'MM/DD/YYYY');"></font>
        </td>
      </tr>
      <tr>
        <td align="left" width="148" bgcolor="#f4f4f4">
          <font face="Arial" size="2">Choose a Newsletter:</font></td>
      </tr>
      <tr>
        <td align="left" width="148" bgcolor="#f4f4f4">
          <font face="Arial" size="2"><input type="checkbox" name="NewsletterListID_292" value="ON">My Test Form<br>
          </font></td>
      </tr>
      <tr>
        <td width="148" bgcolor="#f4f4f4" align="left">
          <font face="Arial" size="2">Delivery Format:<br>
            <select size="1" name="DeliveryFormat">
              <option value="HTML" selected>HTML</option>
              <option value="TEXT">TEXT</option>
            </select></font></td>
      </tr>


      <tr>
        <td width="148" bgcolor="#f4f4f4" align="center">
          <font face="Arial" size="2"><input type="submit" value="Subscribe" name="B1"></font>
        </td>
      </tr>
      <tr>
        <td width="148" bgcolor="#f4f4f4" align="center">
          <font face="Arial" size="2"><a href="https://enewsletter.az.gov/members.aspx?SID=775fc38b-6518-4b20-b7e4-26bd3fed7608">Manage Subscriptions</a></font>
        </td>
      </tr>
    </table>
  </div>
  <input type="hidden" name="JoinType" value="Check">
  <input type="hidden" name="IDList" value="292">
  <input type="hidden" value="775fc38b-6518-4b20-b7e4-26bd3fed7608" name="SID">
  <input type="hidden" name="SendSuccessfulOptInMessage" value="True">
  <input type="hidden" name="EmailDoubleEntry" value="True">
</form>


<?php
var_dump($_POST);

?>
//foreach (field_info_fields() as $key => $field) {
//  if ($field['type'] == 'text_with_summary' || $field['type'] == 'text_long') {
//    db_update('field_revision_' . $key)
//      ->fields(array($key . '_format' => 'basic_html'))
//      ->condition($key . '_format', 'full_html')
//      ->execute();
//
//    db_update('field_revision_' . $key)
//      ->fields(array($key . '_format' => 'basic_html'))
//      ->condition($key . '_format', 'full_html')
//      ->execute();
//  }
//}
//
//db_update('block_custom')
//  ->fields(array('format' => 'basic_html'))
//  ->condition('format', 'full_html')
//  ->execute();