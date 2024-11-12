<?php

/**
 * successMessageCreate
 *
 * @param string $nextTitle
 * @return string
 */
function successMessageCreate($nextTitle = '')
{
    return __('Success Create Data ' . ($nextTitle));
}

/**
 * successMessageUpdate
 *
 * @param string $nextTitle
 * @return string
 */
function successMessageUpdate($nextTitle = '')
{
    return __('Success Update Data ' . ($nextTitle));
}

/**
 * successMessageDelete
 *
 * @param string $nextTitle
 * @return string
 */
function successMessageDelete($nextTitle = '')
{
    return __('Success Delete Data ' . ($nextTitle));
}

/**
 * successMessageImportExcel
 *
 * @param string $nextTitle
 * @return string
 */
function successMessageImportExcel($nextTitle = '')
{
    return __('Success Import Data ' . ($nextTitle) . ' From Excel');
}


/**
 * successMessageLoadData
 *
 * @param string $nextTitle
 * @return string
 */
function successMessageLoadData($nextTitle = '')
{
    return __('Success Load Data ' . ($nextTitle));
}


// GAGAL SECCTION
// ===================================================================================================================

/**
 * failedMessageCreate
 *
 * @param string $nextTitle
 * @return string
 */
function failedMessageCreate($nextTitle = '')
{
    return __('Failed Create Data ' . ($nextTitle));
}

/**
 * failedMessageUpdate
 *
 * @param string $nextTitle
 * @return string
 */
function failedMessageUpdate($nextTitle = '')
{
    return __('Failed Update Data ' . ($nextTitle));
}

/**
 * failedMessageDelete
 *
 * @param string $nextTitle
 * @return string
 */
function failedMessageDelete($nextTitle = '')
{
    return __('Failed Delete Data ' . ($nextTitle));
}


/**
 * failedMessageLoadData
 *
 * @param string $nextTitle
 * @return string
 */
function failedMessageLoadData($nextTitle = '')
{
    return __('Failed Load Data ' . ($nextTitle));
}
