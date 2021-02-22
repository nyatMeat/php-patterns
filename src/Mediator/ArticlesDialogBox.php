<?php


namespace Mediator;


class ArticlesDialogBox extends DialogBox
{
	private ListBox $articleListBox;
	private TextBox $titleTextBox;
	private Button $saveButton;

	public function __construct()
	{
		$this->saveButton = new Button($this);
		$this->articleListBox = new ListBox($this);
		$this->titleTextBox = new TextBox($this);
	}

	public function changed(UIControl $UIControl)
	{
		if ($UIControl === $this->articleListBox)
		{
			$this->articleSelected();
		}
		elseif ($UIControl === $this->titleTextBox)
		{
			$this->titleChanged();
		}
	}

	private function articleSelected()
	{
		$this->titleTextBox->setContent($this->articleListBox->getSelection());
		$this->saveButton->setEnabled(true);
	}

	private function titleChanged()
	{
		$content = $this->titleTextBox->getContent();
		$isEmpty = empty($content);
		$this->saveButton->setEnabled(!$isEmpty);
	}

	public function simulateUserInteraction(){
		$this->articleListBox->setSelection('Article 1');
		echo "TextBox: ". $this->titleTextBox->getContent();
		echo "Save button: ". $this->saveButton->isEnabled();
		$this->titleTextBox->setContent('');
		echo "TextBox: ". $this->titleTextBox->getContent();
		echo "Save button: ". $this->saveButton->isEnabled();
		$this->titleTextBox->setContent('Article 2');
		echo "TextBox: ". $this->titleTextBox->getContent();
		echo "Save button: ". $this->saveButton->isEnabled();
	}
}
