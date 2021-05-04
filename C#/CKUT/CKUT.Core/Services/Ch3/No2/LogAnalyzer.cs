namespace CKUT.Core.Services.Ch3.No2
{
    public class LogAnalyzer
    {
        public bool IsValidFileName(string fileName)
        {
            var fileExtensionManager = new FileExtensionManager();
            return fileExtensionManager.IsValid(fileName);
        }
    }
}
