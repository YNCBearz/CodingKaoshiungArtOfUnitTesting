namespace CKUT.Core.Services.Ch3.No4
{
    public class LogAnalyzer
    {
        private IFileExtensionManager _fileExtensionManager;

        public LogAnalyzer(IFileExtensionManager fileExtensionManager)
        {
            _fileExtensionManager = fileExtensionManager;
        }

        public bool IsValidFileName(string fileName)
        {
            return _fileExtensionManager.IsValid(fileName);
        }
    }
}
