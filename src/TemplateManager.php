<?php

/**
 * Class TemplateManager
 *
 * @category  Evaneos
 * @package   Evaneos
 * @author    Marvin Courcier <courciermarvin@gmail.com>
 * @copyright 2020
 */
class TemplateManager
{
    public function getTemplateComputed(Template $template, array $data)
    {
        if (!$template) {
            throw new \RuntimeException('No template given');
        }

        $replaced = clone($template);
        $replaced->setSubject($this->computeText($replaced->getSubject(), $data));
        $replaced->setContent($this->computeText($replaced->getContent(), $data));

        return $replaced;
    }

    private function computeText($text, array $data)
    {
        $quote = (isset($data['quote']) && $data['quote'] instanceof Quote) ? $data['quote'] : null;

        if ($quote) {
            $quoteFromRepository = QuoteRepository::getInstance()->getById($quote->getId());
            $usefulObject        = SiteRepository::getInstance()->getById($quote->getSiteId());
            $destinationOfQuote  = DestinationRepository::getInstance()->getById($quote->getDestinationId());

            if (strpos($text, '[quote:destination_link]') !== false) {
                $destination = DestinationRepository::getInstance()->getById($quote->getDestinationId());
            }

            $containsSummaryHtml = strpos($text, '[quote:summary_html]');
            $containsSummary     = strpos($text, '[quote:summary]');

            if ($containsSummaryHtml !== false || $containsSummary !== false) {
                if ($containsSummaryHtml !== false) {
                    $text = str_replace(
                        '[quote:summary_html]',
                        Quote::renderHtml($quoteFromRepository),
                        $text
                    );
                }
                if ($containsSummary !== false) {
                    $text = str_replace(
                        '[quote:summary]',
                        Quote::renderText($quoteFromRepository),
                        $text
                    );
                }
            }

            if (strpos($text, '[quote:destination_name]') !== false) {
                $text = str_replace('[quote:destination_name]', $destinationOfQuote->getCountryName(), $text);
            }

            if (isset($destination)) {
                $text = str_replace('[quote:destination_link]', $usefulObject->url . '/' . $destination->getCountryName() . '/quote/' . $quoteFromRepository->id, $text);
            } else {
                $text = str_replace('[quote:destination_link]', '', $text);
            }
        }

        /*
         * USER
         * [user:*]
         */
        $user = (isset($data['user']) && ($data['user']  instanceof User)) ? $data['user'] : ApplicationContext::getInstance()->getCurrentUser();

        if ($user) {
            (strpos($text, '[user:first_name]') !== false) && $text = str_replace('[user:first_name]' , ucfirst(mb_strtolower($user->getFirstname())), $text);
        }

        return $text;
    }
}
